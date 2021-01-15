<?php


namespace backend\modules\api\models;


use common\models\Address;
use common\models\User;
use Yii;
use yii\base\Model;

class SignupAPI extends Model
{
    public $firstName;
    public $lastName;
    public $nif;
    public $phone;
    public $email;
    public $username;
    public $password;

    public $street;
    public $door_number;
    public $floor;
    public $postal_code;
    public $street_code;
    public $city;
    public $district_id;

    public function signup()
    {
        if (!$this->validate()) {
            return false;
        }

        $user = new \backend\modules\api\models\User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();

        $user->firstName = $this->firstName;
        $user->lastName = $this->lastName;
        $user->nif = $this->nif;
        $user->phone = $this->phone;

        $userAddress = new Address();
        $userAddress->street = $this->street;
        $userAddress->door_number = $this->door_number;
        $userAddress->floor = $this->floor;
        $userAddress->postal_code = $this->postal_code;
        $userAddress->street_code = $this->street_code;
        $userAddress->city = $this->city;
        $userAddress->district_id = $this->district_id;
        $userAddress->save();

        $user->address_id = $userAddress->id;

        if($user->save()){
            // atribuição do papel de user por default a todos os utilizadores registados
            $auth = Yii::$app->getAuthManager();
            $userRole = $auth->getRole('user');
            //Linha a baixo está comprometer os testes unitários e funcionais.
            $auth->assign($userRole, $user->getId());

            return $this->sendEmail($user);
        }

        return false;
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
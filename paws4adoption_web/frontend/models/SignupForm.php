<?php
namespace frontend\models;


use common\models\User;
use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $firstName;
    public $lastName;
    public $username;
    public $nif;
    public $email;
    public $password;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'username', 'nif', 'email'], 'trim'],
            [['firstName', 'lastName', 'username', 'nif', 'email', 'password'], 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\user', 'message' => 'This username has already been taken.'],
            [['firstName', 'lastName', 'username'], 'string', 'min' => 2, 'max' => 255],

            ['nif', 'string', 'min' => 9, 'max' => 9],
            ['nif', 'unique', 'targetClass' => '\common\models\user', 'message' => 'This nif is already registered.'],

            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\user', 'message' => 'This email address has already been taken.'],

            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'firstName' => 'Nome',
            'lastName' => 'Apelido',
            'email' => 'Email',
            'nif' => 'NIF',
            'username' => 'Nome de utilizador',
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return false;
        }
        
        $user = new User();
        $user->firstName = $this->firstName;
        $user->lastName = $this->lastName;
        $user->nif = $this->nif;
        $user->email = $this->email;
        $user->username = $this->username;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();

        try {
            if($user->save()){
                // atribuição do papel de user por default a todos os utilizadores registados
                $auth = Yii::$app->getAuthManager();
                $userRole = $auth->getRole('user');
                //TODO: Linha a baixo está a dar problemas nos testes unitários e funcionais.
                $auth->assign($userRole, $user->getId());

                return $this->sendEmail($user);
            }
        } catch (\Exception $e){
            throw $e;
        }

        var_dump($user->errors);
        //return $user->save(false) && $this->sendEmail($user);
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

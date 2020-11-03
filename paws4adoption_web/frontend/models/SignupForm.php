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
    public $email;
    public $nif;
    public $street;
    public $doorNumber;
    public $floor;
    public $postalCode;
    public $streetCode;
    public $city;
    public $municipality;
    public $district;
    public $phone;
    public $username;
    public $password;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['firstName', 'trim'],
            ['firstName', 'required'],
            ['firstName', 'string', 'min' => 2, 'max' => 255],

            ['lastName', 'trim'],
            ['lastName', 'required'],
            ['lastName', 'string', 'min' => 2, 'max' => 255],

            ['nif', 'trim'],
            ['nif', 'required'],
            ['nif', 'unique', 'targetClass' => '\common\models\user', 'message' => 'This NIF already exists in the database.'],
            ['nif', 'string', 'min' => 9, 'max' => 9],

            ['street', 'trim'],
            ['street', 'string', 'min' => 2, 'max' => 255],

            ['doorNumber', 'integer'],
            ['floor', 'integer'],
            ['postalCode', 'integer'],
            ['streetCode', 'integer'],

            ['city', 'trim'],
            ['city', 'string', 'min' => 2, 'max' => 255],

            ['municipality', 'trim'],
            ['municipality', 'string', 'min' => 2, 'max' => 255],

            ['district', 'trim'],
            ['district', 'string', 'min' => 2, 'max' => 255],

            ['phone', 'trim'],
            ['phone', 'string', 'min' => 9, 'max' => 9],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\user', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\user', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
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
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);

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

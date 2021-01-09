<?php

namespace common\models;

use common\classes\RoleManager;
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Html;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $nif
 * @property string|null $phone
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 * @property int|null $address_id
 * @property string $city
 * @property string $fullName
 *
 * @property AssociatedUser $associatedUser

 * @property FoundAnimal[] $foundAnimals
 * @property MissingAnimal[] $missingAnimals
 *
 * @property Adoption[] $adoptions
 * @property Organization[] $organizations
 *
 * @property Address $address
 *
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'nif', 'username', 'auth_key', 'password_hash'], 'required'],
            [['status', 'created_at', 'updated_at', 'address_id'], 'integer'],
            [['firstName', 'lastName'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 64],
            [['nif', 'phone'], 'string', 'max' => 9],
            [['username', 'password_hash', 'password_reset_token', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['email'], 'unique'],
            [['nif'], 'unique'],
            [['username'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['address_id'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address_id' => 'id']],
            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'Nome',
            'lastName' => 'Apelido',
            'email' => 'Email',
            'nif' => 'NIF',
            'phone' => 'Telefone',
            'username' => 'Nome de utilizador',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'address_id' => 'Address ID',
            'fullName' => 'Nome completo',
            'statusHtml' => 'Estado',
            'adminPermissionStatusHtml' => 'Admin'
        ];
    }

    /**
     * Gets query for [[Adoptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptions()
    {
        return $this->hasMany(Adoption::className(), ['adopter_id' => 'id']);
    }

    /**
     * Gets query for [[FoundAnimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoundAnimals()
    {
        return $this->hasMany(FoundAnimal::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[MissingAnimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMissingAnimals()
    {
        return $this->hasMany(MissingAnimal::className(), ['owner_id' => 'id']);
    }

    /**
     * Gets query for [[Address]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAddress()
    {
        return $this->hasOne(Address::className(), ['id' => 'address_id']);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['auth_key' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token) {
        return static::findOne([
            'verification_token' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Generates new token for email verification
     */
    public function generateEmailVerificationToken()
    {
        $this->verification_token = preg_replace('/[^A-Za-z0-9_]/', '0', Yii::$app->security->generateRandomString(32) . '_' . time());
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * Get's full name of the user
     * @return string
     */
    public function getFullName(){
        return $this->firstName . " " . $this->lastName;
    }

    /**
     * Gets query for [[AssociatedUser]].
     * @return \yii\db\ActiveQuery
     */
    public function getAssociatedUser(){
        return $this->hasOne(AssociatedUser::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[Founded Organizations]].
     * @return \yii\db\ActiveQuery
     */
    public function getFoundedOrganizations(){
        return $this->hasMany(Organization::className(), ['founder_id' => 'id']);
    }

    /**
     * Gets the html status for the user
     * @return string
     */
    public function getStatusHtml(){
        $class = null;
        $text = null;
        switch($this->status){
            case self::STATUS_DELETED:
                $class = 'btn btn-danger';
                $text = 'Eliminado';
                break;
            case self::STATUS_INACTIVE:
                $class = 'btn btn-default';
                $text = 'Inativo';
                break;
            case self::STATUS_ACTIVE:
                $class = 'btn btn-success';
                $text = 'Ativo';
                break;
        }
        return '<span class="'. Html::encode($class) .  ' render-status">' . Html::encode($text) . '</span>';
    }

    /**
     * Get's the html button for bokc and unblock users
     * @return array
     */
    public function getActionButtonBlock(){
        $text = null;
        $html = null;
        switch($this->status){
            case self::STATUS_INACTIVE:
                $text = 'Desbloquear';
                $html = '<span class="glyphicon glyphicon-ok-sign gi-block" style="color:green"></span>';
                break;
            case self::STATUS_ACTIVE:
                $text = 'Bloquear';
                $html = '<span class="glyphicon glyphicon-remove-sign" style="color:red"></span>';
                break;
        }

        return [
            'html' => $html,
            'text' => $text
        ];
    }

    /**
     * Get's the html status of the admin permission for this user
     */
    public function getAdminPermissionStatusHtml(){
        $userHasAdminRole = RoleManager::userHasRole(RoleManager::ADMIN_ROLE, $this->id);
        $class = null;
        $text = null;
        if($userHasAdminRole){
            $class = 'btn btn-success';
            $text = 'Sim';
        } else{
            $class = 'btn btn-default   ';
            $text = 'Não';
        }
        return '<span class="'. Html::encode($class) .  ' render-status">' . Html::encode($text) . '</span>';
    }

    /**
     * Get's the html button to give or take admin permission
     * @return array
     */
    public function getActionButtonAdmin(){
        $userHasAdminRole = RoleManager::userHasRole(RoleManager::ADMIN_ROLE, $this->id);
        $text = null;
        $html = null;
        if($userHasAdminRole) {
            $text = 'Retirar Admin';
            $html = '<span class="glyphicon glyphicon-thumbs-down" style="color:red"></span>';
        } else {
            $text = 'Tornar Admin';
            $html = '<span class="glyphicon glyphicon-thumbs-up gi-block" style="color:green"></span>';
        }

        return [
            'html' => $html,
            'text' => $text
        ];
    }
}

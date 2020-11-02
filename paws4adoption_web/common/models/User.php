<?php

namespace common\models;

use Yii;

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
 *
 * @property Adoption[] $adoptions
 * @property FoundAnimal[] $foundAnimals
 * @property MissingAnimal[] $missingAnimals
 * @property Address $address
 */
class User extends \yii\db\ActiveRecord
{
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
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'nif', 'username', 'auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'email' => 'Email',
            'nif' => 'Nif',
            'phone' => 'Phone',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'address_id' => 'Address ID',
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
}

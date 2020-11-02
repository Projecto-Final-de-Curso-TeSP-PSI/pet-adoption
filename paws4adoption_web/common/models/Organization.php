<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "organizations".
 *
 * @property int $id
 * @property string $name
 * @property string $nif
 * @property string|null $email
 * @property string|null $phone
 * @property int|null $address_id
 *
 * @property AdoptionAnimal[] $adoptionAnimals
 * @property Address $address
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organizations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'nif'], 'required'],
            [['address_id'], 'integer'],
            [['name', 'email'], 'string', 'max' => 64],
            [['nif', 'phone'], 'string', 'max' => 9],
            [['nif'], 'unique'],
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
            'name' => 'Name',
            'nif' => 'Nif',
            'email' => 'Email',
            'phone' => 'Phone',
            'address_id' => 'Address ID',
        ];
    }

    /**
     * Gets query for [[AdoptionAnimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionAnimals()
    {
        return $this->hasMany(AdoptionAnimal::className(), ['organization_id' => 'id']);
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

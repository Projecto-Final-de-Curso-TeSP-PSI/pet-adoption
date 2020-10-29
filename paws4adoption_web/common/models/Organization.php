<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizations".
 *
 * @property int $organizationId
 * @property string $name
 * @property string $nif
 * @property string|null $email
 * @property string|null $phone
 * @property int|null $address
 *
 * @property AdoptionAnimal[] $adoptionAnimals
 * @property Address $address0
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
            [['address'], 'integer'],
            [['name', 'email'], 'string', 'max' => 64],
            [['nif', 'phone'], 'string', 'max' => 9],
            [['nif'], 'unique'],
            [['address'], 'exist', 'skipOnError' => true, 'targetClass' => Address::class, 'targetAttribute' => ['address' => 'address_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'organizationId' => 'Organization ID',
            'name' => 'Name',
            'nif' => 'Nif',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }

    /**
     * Gets query for [[AdoptionAnimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionAnimals()
    {
        return $this->hasMany(AdoptionAnimal::class, ['organization_id' => 'organizationId']);
    }

    /**
     * Gets query for [[Address0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAddress0()
    {
        return $this->hasOne(Address::class, ['address_id' => 'address']);
    }
}

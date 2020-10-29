<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $address_id
 * @property string|null $street
 * @property int|null $door_number
 * @property int|null $floor
 * @property int|null $postal_code
 * @property int|null $street_code
 * @property string|null $city
 * @property string|null $municipality
 * @property string|null $district
 *
 * @property Users[] $users
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['door_number', 'floor', 'postal_code', 'street_code'], 'integer'],
            [['street', 'city', 'municipality', 'district'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'address_id' => 'Address ID',
            'street' => 'Street',
            'door_number' => 'Door Number',
            'floor' => 'Floor',
            'postal_code' => 'Postal Code',
            'street_code' => 'Street Code',
            'city' => 'City',
            'municipality' => 'Municipality',
            'district' => 'District',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['address' => 'address_id']);
    }
}

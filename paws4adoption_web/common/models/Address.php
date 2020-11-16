<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id
 * @property string|null $street
 * @property int|null $door_number
 * @property int|null $floor
 * @property int|null $postal_code
 * @property int|null $street_code
 * @property string|null $city
 * @property int $district_id
 *
 * @property District $district
 * @property Organization[] $organizations
 * @property User[] $users
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
            [['postal_code', 'street_code', 'district_id'], 'integer'],
            [['district_id'], 'required'],
            [['door_number', 'floor'], 'string', 'max' => 16],
            [['street', 'city'], 'string', 'max' => 45],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'street' => 'Street',
            'door_number' => 'Door Number',
            'floor' => 'Floor',
            'postal_code' => 'Postal Code',
            'street_code' => 'Street Code',
            'city' => 'City',
            'district_id' => 'Distrito',
        ];
    }

    /**
     * Gets query for [[District]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['id' => 'district_id']);
    }

    /**
     * Gets query for [[Organizations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizations()
    {
        return $this->hasMany(Organization::className(), ['address_id' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['address_id' => 'id']);
    }

    public function getFullAddress(){
        $result = $this->street;
        $result .= $this->door_number != null ? " Nº " . $this->door_number : "";
        $result .= $this->floor != null ? " " . $this->floor : "º";
        $result .= $this->city != null ? " - " . $this->city : "";


        return $result;
    }
}

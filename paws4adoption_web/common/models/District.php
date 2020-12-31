<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "districts".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Address[] $addresses
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'districts';
    }

    public static function getData()
    {
        return ArrayHelper::map(District::find()->all(), 'id', 'name');
    }

    public static function getId($district)
    {
        $instance = self::find()
            ->where(['name' => $district])
            ->one();
        return $instance->id;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Distrito',
        ];
    }

    /**
     * Gets query for [[Addresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['district_id' => 'id']);
    }

    //Returns all Districts that have organizations
    public static function withOrganizations(){
        return self::find()
            ->innerjoinWith('addresses')
            ->where(['in', 'address.id', Organization::getAllAddressesIds()])
            ->addOrderBy('name')
            ->all();
    }

    //Returns all Districts that have Adoption Animals
    public static function withAdoptionAnimals(){
        return self::find()
            ->innerjoinWith('addresses')
            ->where(['in', 'address.id', AdoptionAnimal::getAllAddressesIds()])
            ->addOrderBy('name')
            ->all();
    }

    //Returns all Districts that have Missing Animals
    public static function withMissingAnimals(){
        return self::find()
            ->innerjoinWith('addresses')
            ->where(['in', 'address.id', MissingAnimal::getAllAddressesIds()])
            ->addOrderBy('name')
            ->all();
    }

    //Returns all Districts that have Found Animals
    public static function withFoundAnimals(){
        return self::find()
            ->innerjoinWith('addresses')
            ->where(['in', 'address.id', FoundAnimal::getAllAddressesIds()])
            ->addOrderBy('name')
            ->all();
    }

}

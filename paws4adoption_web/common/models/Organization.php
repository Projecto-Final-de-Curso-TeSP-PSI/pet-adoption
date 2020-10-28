<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizations".
 *
 * @property int $organizationId
 * @property string $name
 * @property string $nif
 * @property string $street
 * @property int|null $doorNumber
 * @property int|null $floor
 * @property int|null $postalCode
 * @property int|null $streetCode
 * @property string $city
 * @property string $municipality
 * @property string $district
 * @property string|null $email
 * @property string|null $phone
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
            [['name', 'nif', 'street', 'city', 'municipality', 'district'], 'required'],
            [['doorNumber', 'floor', 'postalCode', 'streetCode'], 'integer'],
            [['name', 'street', 'city', 'municipality', 'district', 'email'], 'string', 'max' => 64],
            [['nif', 'phone'], 'string', 'max' => 9],
            [['nif'], 'unique'],
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
            'street' => 'Street',
            'doorNumber' => 'Door Number',
            'floor' => 'Floor',
            'postalCode' => 'Postal Code',
            'streetCode' => 'Street Code',
            'city' => 'City',
            'municipality' => 'Municipality',
            'district' => 'District',
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }
}

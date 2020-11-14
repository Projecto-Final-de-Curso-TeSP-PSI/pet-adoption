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
        $prompt = 'Escolha um distrito';
        $districtList = ArrayHelper::map(District::find()->all(), 'id', 'name');

        return array_merge(['prompt' => $prompt], $districtList);
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
            'name' => 'Name',
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
}

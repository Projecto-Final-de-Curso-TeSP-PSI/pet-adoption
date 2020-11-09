<?php

namespace common\models;

use Yii;

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
        return [
            'prompt' => 'Escolha um distrito',
            1 => 'Distrito 1',
            2 => 'Distrito 2',
            3 => 'Distrito 3',
        ];
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

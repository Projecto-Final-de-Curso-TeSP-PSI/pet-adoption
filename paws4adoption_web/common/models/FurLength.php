<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fur_length".
 *
 * @property int $fur_length_id
 * @property string $fur_length
 *
 * @property Animals[] $animals
 */
class FurLength extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fur_length';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fur_length'], 'required'],
            [['fur_length'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fur_length_id' => 'Fur Length ID',
            'fur_length' => 'Fur Length',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animals::className(), ['fur_length' => 'fur_length_id']);
    }
}

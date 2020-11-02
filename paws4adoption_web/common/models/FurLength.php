<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fur_lengths".
 *
 * @property int $id
 * @property string $fur_length
 *
 * @property Animal[] $animals
 */
class FurLength extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fur_lengths';
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
            'id' => 'ID',
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
        return $this->hasMany(Animal::className(), ['fur_length_id' => 'id']);
    }
}

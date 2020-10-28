<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fur_color".
 *
 * @property int $fur_color_id
 * @property string $fur_color
 *
 * @property Animals[] $animals
 */
class FurColor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fur_color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fur_color'], 'required'],
            [['fur_color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fur_color_id' => 'Fur Color ID',
            'fur_color' => 'Fur Color',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animals::className(), ['fur_color' => 'fur_color_id']);
    }
}

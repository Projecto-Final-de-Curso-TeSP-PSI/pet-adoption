<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "eye_color".
 *
 * @property int $eye_color_id
 * @property string $eye_color
 *
 * @property Animals[] $animals
 */
class EyeColor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eye_color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eye_color'], 'required'],
            [['eye_color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'eye_color_id' => 'Eye Color ID',
            'eye_color' => 'Eye Color',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animals::className(), ['eye_color' => 'eye_color_id']);
    }
}

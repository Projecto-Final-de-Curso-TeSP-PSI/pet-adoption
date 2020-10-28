<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "size".
 *
 * @property int $size_id
 * @property string $size
 *
 * @property Animals[] $animals
 */
class Size extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'size';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['size'], 'required'],
            [['size'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'size_id' => 'Size ID',
            'size' => 'Size',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animals::className(), ['size' => 'size_id']);
    }
}

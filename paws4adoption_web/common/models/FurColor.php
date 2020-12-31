<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fur_colors".
 *
 * @property int $id
 * @property string $fur_color
 *
 * @property Animal[] $animals
 */
class FurColor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fur_colors';
    }

    public static function getData()
    {
        return [
            1 => 'Branco',
            2 => 'Preto',
            3 => 'Castanho',
            4 => 'Bege',
        ];
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
            'id' => 'ID',
            'fur_color' => 'Côr',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['fur_color_id' => 'id']);
    }

    /**
     *
     */
    public static function getId($color){
        $instance = self::find()
            ->where(['fur_color' => $color])
            ->one();
        return $instance->id;
    }
}

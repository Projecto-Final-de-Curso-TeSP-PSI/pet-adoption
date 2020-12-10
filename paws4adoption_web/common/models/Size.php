<?php

namespace common\models;

use phpDocumentor\Reflection\Utils;
use Yii;

/**
 * This is the model class for table "sizes".
 *
 * @property int $id
 * @property string $size
 *
 * @property Animal[] $animals
 */
class Size extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sizes';
    }

    /**
     * Devolve array com todos os tamanhos definidos na Base de dados
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getData()
    {
        return self::find()->all();
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
            'id' => 'ID',
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
        return $this->hasMany(Animal::className(), ['size_id' => 'id']);
    }

    public static function getId($size){
        $instance = self::find()
            ->where(['size' => $size])
            ->one();
        return $instance->id;
    }
}

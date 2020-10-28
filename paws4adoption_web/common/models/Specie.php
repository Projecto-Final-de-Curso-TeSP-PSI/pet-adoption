<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "species".
 *
 * @property int $specie_id
 * @property string $specie_name
 *
 * @property Animals[] $animals
 */
class Specie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'species';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['specie_name'], 'required'],
            [['specie_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'specie_id' => 'Specie ID',
            'specie_name' => 'Specie Name',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animals::className(), ['specie_id' => 'specie_id']);
    }
}

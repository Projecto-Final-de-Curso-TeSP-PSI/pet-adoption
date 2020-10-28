<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "breeds".
 *
 * @property int $breed_id
 * @property string $breed_name
 *
 * @property Animals[] $animals
 */
class Breed extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'breeds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['breed_name'], 'required'],
            [['breed_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'breed_id' => 'Breed ID',
            'breed_name' => 'Breed Name',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animals::className(), ['breed_id' => 'breed_id']);
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "adoptions".
 *
 * @property int $id
 * @property string $motivation
 * @property string|null $adoption_date
 * @property int $adopted_animal_id
 * @property int $adopter_id
 *
 * @property User $adopter
 * @property AdoptionAnimal $id0
 */
class Adoption extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adoptions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['motivation', 'adopted_animal_id', 'adopter_id'], 'required'],
            [['motivation'], 'string'],
            [['adoption_date'], 'safe'],
            [['adopted_animal_id', 'adopter_id'], 'integer'],
            [['adopter_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['adopter_id' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => AdoptionAnimal::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'motivation' => 'Motivation',
            'adoption_date' => 'Adoption Date',
            'adopted_animal_id' => 'Adopted Animal ID',
            'adopter_id' => 'Adopter ID',
        ];
    }

    /**
     * Gets query for [[Adopter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdopter()
    {
        return $this->hasOne(User::className(), ['id' => 'adopter_id']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(AdoptionAnimal::className(), ['id' => 'id']);
    }
}

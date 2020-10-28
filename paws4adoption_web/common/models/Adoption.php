<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adoptions".
 *
 * @property int $adoption_id
 * @property string $motivation
 * @property string|null $adoption_date
 * @property int $adoption_animal_id
 * @property int $adopter_id
 *
 * @property Users $adopter
 * @property AdoptionAnimals $adoption
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
            [['motivation', 'adoption_animal_id', 'adopter_id'], 'required'],
            [['motivation'], 'string'],
            [['adoption_date'], 'safe'],
            [['adoption_animal_id', 'adopter_id'], 'integer'],
            [['adopter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['adopter_id' => 'userId']],
            [['adoption_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdoptionAnimals::className(), 'targetAttribute' => ['adoption_id' => 'adoption_animal_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adoption_id' => 'Adoption ID',
            'motivation' => 'Motivation',
            'adoption_date' => 'Adoption Date',
            'adoption_animal_id' => 'Adoption Animal ID',
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
        return $this->hasOne(Users::className(), ['userId' => 'adopter_id']);
    }

    /**
     * Gets query for [[Adoption]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoption()
    {
        return $this->hasOne(AdoptionAnimals::className(), ['adoption_animal_id' => 'adoption_id']);
    }
}

<?php

namespace common\models;

use phpDocumentor\Reflection\Types\Self_;
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
 * @property AdoptionAnimal $adoptedAnimal
 */
class Adoption extends \yii\db\ActiveRecord
{
    const SCENARIO_ADOPTION = 'adoption';
    const SCENARIO_FAT = 'fat';


    /**
     * {@inheritdoc}§
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
            [['adopted_animal_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdoptionAnimal::className(), 'targetAttribute' => ['adopted_animal_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        switch($this->getScenario()){
            case self::SCENARIO_ADOPTION:
                return [
                    'id' => 'ID',
                    'motivation' => 'Motivação para o pedido de adoção',
                    'adoption_date' => 'Adoption Date',
                    'adopted_animal_id' => 'Animal a adotar',
                    'adopter_id' => 'Adotante',
                ];
                break;
            case self::SCENARIO_FAT:
                return [
                    'id' => 'ID',
                    'motivation' => 'Motivação para o pedido de acolhimento temporário',
                    'adoption_date' => 'Data do acolhimento',
                    'adopted_animal_id' => 'Animal a acolher',
                    'adopter_id' => 'Acolhedor temporário',
                ];
                break;

        }

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
     * Gets query for [[AdoptedAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptedAnimal()
    {
        return $this->hasOne(AdoptionAnimal::className(), ['id' => 'adopted_animal_id']);
    }

}

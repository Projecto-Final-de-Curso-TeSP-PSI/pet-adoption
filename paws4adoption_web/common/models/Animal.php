<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "animals".
 *
 * @property int $animal_id
 * @property string|null $chipId
 * @property string $createdAt
 * @property string|null $description
 * @property int $specie_id
 * @property int $breed_id
 * @property int $fur_length
 * @property int $fur_color
 * @property int $eye_color
 * @property int $size
 *
 * @property AdoptionAnimals $adoptionAnimals
 * @property Breeds $breed
 * @property EyeColor $eyeColor
 * @property FurColor $furColor
 * @property FurLength $furLength
 * @property Size $size0
 * @property Species $specie
 * @property FoundAnimals $foundAnimals
 * @property MissingAnimal $missingAnimal
 */
class Animal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'animals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createdAt'], 'safe'],
            [['description'], 'string'],
            [['specie_id', 'breed_id', 'fur_length', 'fur_color', 'eye_color', 'size'], 'required'],
            [['specie_id', 'breed_id', 'fur_length', 'fur_color', 'eye_color', 'size'], 'integer'],
            [['chipId'], 'string', 'max' => 15],
            [['breed_id'], 'exist', 'skipOnError' => true, 'targetClass' => Breeds::className(), 'targetAttribute' => ['breed_id' => 'breed_id']],
            [['eye_color'], 'exist', 'skipOnError' => true, 'targetClass' => EyeColor::className(), 'targetAttribute' => ['eye_color' => 'eye_color_id']],
            [['fur_color'], 'exist', 'skipOnError' => true, 'targetClass' => FurColor::className(), 'targetAttribute' => ['fur_color' => 'fur_color_id']],
            [['fur_length'], 'exist', 'skipOnError' => true, 'targetClass' => FurLength::className(), 'targetAttribute' => ['fur_length' => 'fur_length_id']],
            [['size'], 'exist', 'skipOnError' => true, 'targetClass' => Size::className(), 'targetAttribute' => ['size' => 'size_id']],
            [['specie_id'], 'exist', 'skipOnError' => true, 'targetClass' => Species::className(), 'targetAttribute' => ['specie_id' => 'specie_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'animal_id' => 'Animal ID',
            'chipId' => 'Chip ID',
            'createdAt' => 'Created At',
            'description' => 'Description',
            'specie_id' => 'Specie ID',
            'breed_id' => 'Breed ID',
            'fur_length' => 'Fur Length',
            'fur_color' => 'Fur Color',
            'eye_color' => 'Eye Color',
            'size' => 'Size',
        ];
    }

    /**
     * Gets query for [[AdoptionAnimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionAnimals()
    {
        return $this->hasOne(AdoptionAnimals::className(), ['adoption_animal_id' => 'animal_id']);
    }

    /**
     * Gets query for [[Breed]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBreed()
    {
        return $this->hasOne(Breeds::className(), ['breed_id' => 'breed_id']);
    }

    /**
     * Gets query for [[EyeColor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEyeColor()
    {
        return $this->hasOne(EyeColor::className(), ['eye_color_id' => 'eye_color']);
    }

    /**
     * Gets query for [[FurColor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurColor()
    {
        return $this->hasOne(FurColor::className(), ['fur_color_id' => 'fur_color']);
    }

    /**
     * Gets query for [[FurLength]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurLength()
    {
        return $this->hasOne(FurLength::className(), ['fur_length_id' => 'fur_length']);
    }

    /**
     * Gets query for [[Size0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSize0()
    {
        return $this->hasOne(Size::className(), ['size_id' => 'size']);
    }

    /**
     * Gets query for [[Specie]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecie()
    {
        return $this->hasOne(Species::className(), ['specie_id' => 'specie_id']);
    }

    /**
     * Gets query for [[FoundAnimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoundAnimals()
    {
        return $this->hasOne(FoundAnimals::className(), ['found_animal_id' => 'animal_id']);
    }

    /**
     * Gets query for [[MissingAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMissingAnimal()
    {
        return $this->hasOne(MissingAnimal::className(), ['missing_animal_id' => 'animal_id']);
    }
}

<?php

namespace common\models;

use backend\mosquitto\MosquittoCatcher;
use backend\mosquitto\phpMQTT;
use stdClass;
use Yii;
use yii\db\StaleObjectException;

/**
 * This is the model class for table "animals".
 *
 * @property int $id
 * @property string|null $chipId
 * @property string $createdAt
 * @property string|null $description
 * @property int $nature_id
 * @property int $fur_length_id
 * @property int $fur_color_id
 * @property int $size_id
 * @property string $sex
 * @property string $name
 *
 * @property AdoptionAnimal $adoptionAnimal
 * @property FurColor $furColor
 * @property FurLength $furLength
 * @property Nature $nature
 * @property Size $size
 * @property FoundAnimal $foundAnimal
 * @property MissingAnimal $missingAnimal
 * @property Photo[] $photos
 */
class Animal extends \yii\db\ActiveRecord
{
    const SCENARIO_MISSING_ANIMAL = 'missingAnimal';
    const SCENARIO_ADOPTION_ANIMAL = 'adoptionAnimal';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'animals';
    }


    public static function getSex()
    {
        return [
            'M' => 'Macho',
            'F' => 'Femêa'
        ];
    }

    public static function getAllNatureIds()
    {
        return self::find()
            ->select('nature_id')
            ->column();
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'sex', 'name'], 'string'],
            [['nature_id', 'fur_length_id', 'fur_color_id', 'size_id'], 'integer'],
            [['nature_id', 'fur_length_id', 'fur_color_id', 'size_id', 'sex'], 'required'],
            [['chipId'], 'string', 'max' => 15],
            [['createdAt'], 'safe'],
            [['fur_color_id'], 'exist', 'skipOnError' => true, 'targetClass' => FurColor::className(), 'targetAttribute' => ['fur_color_id' => 'id']],
            [['fur_length_id'], 'exist', 'skipOnError' => true, 'targetClass' => FurLength::className(), 'targetAttribute' => ['fur_length_id' => 'id']],
            [['nature_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nature::className(), 'targetAttribute' => ['nature_id' => 'id']],
            [['size_id'], 'exist', 'skipOnError' => true, 'targetClass' => Size::className(), 'targetAttribute' => ['size_id' => 'id']],
            [['name'], 'required', 'on' => self::SCENARIO_MISSING_ANIMAL],
            [['name', 'description', 'sex'], 'required', 'on' => self::SCENARIO_ADOPTION_ANIMAL],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'chipId' => 'Número do Chip',
            'createdAt' => 'Postado em',
            'description' => 'Descrição',
            'nature_id' => 'Raça',
            'fur_length_id' => 'Tamanho do pêlo',
            'fur_color_id' => 'Cor do pêlo',
            'size_id' => 'Porte',
            'sex' => 'Sexo',
        ];
    }


    /**
     * Gets query for [[AdoptionAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionAnimal()
    {
        return $this->hasOne(AdoptionAnimal::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[FurColor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurColor()
    {
        return $this->hasOne(FurColor::className(), ['id' => 'fur_color_id']);
    }

    /**
     * Gets query for [[FurLength]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurLength()
    {
        return $this->hasOne(FurLength::className(), ['id' => 'fur_length_id']);
    }

    /**
     * Gets query for [[Nature]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNature()
    {
        return $this->hasOne(Nature::className(), ['id' => 'nature_id']);
    }

    /**
     * Gets query for [[Size]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSize()
    {
        return $this->hasOne(Size::className(), ['id' => 'size_id']);
    }

    /**
     * Gets query for [[FoundAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoundAnimal()
    {
        return $this->hasOne(FoundAnimal::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[MissingAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMissingAnimal()
    {
        return $this->hasOne(MissingAnimal::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[Photo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photo::className(), ['id_animal' => 'id']);
    }

    public function getPhoto()
    {
        foreach ( $this->photos as $photo){
            return $photo->imgBase64;
        }

    }

    public function getType()
    {
        if ($this->getAdoptionAnimal()->count() != '0') {
            return 'adoptionAnimal';
        }
        if ($this->getFoundAnimal()->count() != '0') {
            return 'foundAnimal';
        }
        if ($this->getMissingAnimal()->count() != '0') {
            return 'missingAnimal';
        }
        return null;
    }

    /**
     * Override static method find, and sets that AnimalQuery.php add's querying methods
     * @return AnimalQuery|\yii\db\ActiveQuery
     */
    public static function find(){
        return new AnimalQuery(get_called_class());
    }
}

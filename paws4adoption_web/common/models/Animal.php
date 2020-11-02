<?php

namespace common\models;

use Yii;

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
 *
 * @property AdoptionAnimal $adoptionAnimal
 * @property FurColor $furColor
 * @property FurLength $furLength
 * @property Nature $nature
 * @property Size $size
 * @property FoundAnimal $foundAnimal
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
            [['description', 'sex'], 'string'],
            [['nature_id', 'fur_length_id', 'fur_color_id', 'size_id', 'sex'], 'required'],
            [['nature_id', 'fur_length_id', 'fur_color_id', 'size_id'], 'integer'],
            [['chipId'], 'string', 'max' => 15],
            [['fur_color_id'], 'exist', 'skipOnError' => true, 'targetClass' => FurColor::className(), 'targetAttribute' => ['fur_color_id' => 'id']],
            [['fur_length_id'], 'exist', 'skipOnError' => true, 'targetClass' => FurLength::className(), 'targetAttribute' => ['fur_length_id' => 'id']],
            [['nature_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nature::className(), 'targetAttribute' => ['nature_id' => 'id']],
            [['size_id'], 'exist', 'skipOnError' => true, 'targetClass' => Size::className(), 'targetAttribute' => ['size_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chipId' => 'Chip ID',
            'createdAt' => 'Created At',
            'description' => 'Description',
            'nature_id' => 'Nature ID',
            'fur_length_id' => 'Fur Length ID',
            'fur_color_id' => 'Fur Color ID',
            'size_id' => 'Size ID',
            'sex' => 'Sex',
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
}

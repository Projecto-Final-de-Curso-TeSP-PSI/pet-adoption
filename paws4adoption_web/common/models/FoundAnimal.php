<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "found_animals".
 *
 * @property int $found_animal_id
 * @property string|null $location
 * @property int $user_id
 * @property bool|null $is_active
 * @property string|null $found_date
 * @property string|null $priority
 *
 * @property Animals $foundAnimal
 * @property Users $user
 */
class FoundAnimal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'found_animals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['found_animal_id', 'user_id'], 'required'],
            [['found_animal_id', 'user_id'], 'integer'],
            [['is_active'], 'boolean'],
            [['found_date'], 'safe'],
            [['priority'], 'string'],
            [['location'], 'string', 'max' => 45],
            [['found_animal_id'], 'unique'],
            [['found_animal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Animals::className(), 'targetAttribute' => ['found_animal_id' => 'animal_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'userId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'found_animal_id' => 'Found Animal ID',
            'location' => 'Location',
            'user_id' => 'User ID',
            'is_active' => 'Is Active',
            'found_date' => 'Found Date',
            'priority' => 'Priority',
        ];
    }

    /**
     * Gets query for [[FoundAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoundAnimal()
    {
        return $this->hasOne(Animals::className(), ['animal_id' => 'found_animal_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['userId' => 'user_id']);
    }
}

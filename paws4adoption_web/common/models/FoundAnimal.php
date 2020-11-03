<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "found_animals".
 *
 * @property int $id
 * @property string|null $location
 * @property bool|null $is_active
 * @property string|null $found_date
 * @property string|null $priority
 * @property int $user_id
 *
 * @property Animal $animal
 * @property User $user
 */
class FoundAnimal extends \common\models\Animal
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
            [['id', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['is_active'], 'boolean'],
            [['found_date'], 'safe'],
            [['priority'], 'string'],
            [['location'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location' => 'Location',
            'is_active' => 'Is Active',
            'found_date' => 'Found Date',
            'priority' => 'Priority',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimal()
    {
        return $this->hasOne(Animal::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}

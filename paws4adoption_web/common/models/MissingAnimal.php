<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "missing_animal".
 *
 * @property int $missing_animal_id
 * @property string|null $missing_date
 * @property bool|null $is_missing
 * @property int $owner_id
 *
 * @property Animals $missingAnimal
 * @property Users $owner
 */
class MissingAnimal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'missing_animal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['missing_animal_id', 'owner_id'], 'required'],
            [['missing_animal_id', 'owner_id'], 'integer'],
            [['missing_date'], 'safe'],
            [['is_missing'], 'boolean'],
            [['missing_animal_id'], 'unique'],
            [['missing_animal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Animals::className(), 'targetAttribute' => ['missing_animal_id' => 'animal_id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['owner_id' => 'userId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'missing_animal_id' => 'Missing Animal ID',
            'missing_date' => 'Missing Date',
            'is_missing' => 'Is Missing',
            'owner_id' => 'Owner ID',
        ];
    }

    /**
     * Gets query for [[MissingAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMissingAnimal()
    {
        return $this->hasOne(Animals::className(), ['animal_id' => 'missing_animal_id']);
    }

    /**
     * Gets query for [[Owner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Users::className(), ['userId' => 'owner_id']);
    }
}

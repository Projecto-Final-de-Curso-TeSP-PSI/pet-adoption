<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "missing_animals".
 *
 * @property int $id
 * @property string|null $missing_date
 * @property bool|null $is_missing
 * @property int $owner_id
 *
 * @property Animal $animal
 * @property User $owner
 */
class MissingAnimal extends \common\models\Animal
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'missing_animals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'owner_id'], 'required'],
            [['id', 'owner_id'], 'integer'],
            [['missing_date'], 'safe'],
            [['is_missing'], 'boolean'],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['id' => 'id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'missing_date' => 'Missing Date',
            'is_missing' => 'Is Missing',
            'owner_id' => 'Owner ID',
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
     * Gets query for [[Owner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(User::className(), ['id' => 'owner_id']);
    }
}

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
 * @property Animal $id0
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
        $parentRules = parent::rules();
        $childRules = [
            [['id', 'owner_id'], 'required'],
            [['id', 'owner_id'], 'integer'],
            [['missing_date'], 'safe'],
            [['is_missing'], 'boolean'],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['id' => 'id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_id' => 'id']],
        ];
        return array_merge($parentRules, $childRules);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        $parentAtributeLabels = parent::attributeLabels();
        $childAtributeLabels = [
            'id' => 'ID',
            'missing_date' => 'Data de Desaparecimento',
            'is_missing' => 'Desaparecido',
            'owner_id' => 'Owner ID',
        ];
        return array_merge($parentAtributeLabels, $childAtributeLabels);
    }

    /**
     * Gets query for [[Animal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
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

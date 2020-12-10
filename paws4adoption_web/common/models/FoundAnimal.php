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
 * @property Animal $missing-animal
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
            //A data tem de ser um date time ou algo do genero para se usar o calendario
            [['id', 'user_id', 'priority'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['is_active'], 'boolean'],
            [['found_date'], 'safe'],
            [['priority'], 'string'],
            //A localização leva um id e nao uma string
            //[['location'], 'string', 'max' => 45],
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
        $parentAtributeLabels = parent::attributeLabels();
        $childAtributeLabels = [
            'id' => 'ID',
            'location' => 'Location',
            'is_active' => 'Is Active',
            'found_date' => 'Data de Encontro',
            'priority' => 'Prioridade',
            'user_id' => 'User ID',
        ];
        return array_merge($parentAtributeLabels, $childAtributeLabels);
    }

    public static function getPriority()
    {
        return [
            'Baixa' => 'Baixa',
            'Media' => 'Media',
            'Alta' => 'Alta',
            'Por classificar' => 'Por classificar'
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

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(User::className(), ['id' => 'address_id']);
    }

    /**
     * Gets query for [[FoundDate]].
     *
     * @return string
     */
    public function getFoundDate()
    {
        return $this->found_date;
    }

    public static function getAllAddressesIds()
    {
        return self::find()
            ->innerJoinWith('user')
            ->select('address_id')
            ->column();
    }


}

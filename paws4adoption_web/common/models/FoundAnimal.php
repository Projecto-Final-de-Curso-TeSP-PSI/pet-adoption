<?php

namespace common\models;

use backend\mosquitto\MosquittoCatcher;
use Yii;
use yii\db\StaleObjectException;

/***
 * This is the model class for table "found_animals".
 *
 * @property int $id
 * @property int $location_id
 * @property bool $is_active
 * @property string|null $found_date
 * @property string $priority
 * @property int $user_id
 *
 * @property Animal $animal
 * @property Address $location
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
            [['id', 'location_id', 'user_id'], 'required'],
            [['id', 'location_id', 'user_id'], 'integer'],
            [['is_active'], 'boolean'],
            [['found_date'], 'safe'],
            [['priority'], 'string'],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['id' => 'id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['location_id' => 'id']],
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
           'location_id' => 'Localização',
           'is_active' => 'Ativo',
           'found_date' => 'Data de Encontro',
           'priority' => 'Prioridade',
           'user_id' => 'User',
        ];
       return array_merge($parentAtributeLabels, $childAtributeLabels);
   }

    /**
     * @return array with the priority enum
     */
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
     * Gets query for [[Animal]].
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
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Address::className(), ['id' => 'location_id']);
    }

    /**
     * @return array with all addresses id on the found animals
     */
    public static function getAllAddressesIds()
    {
        return self::find()
            ->innerJoinWith('user')
            ->select('address_id')
            ->distinct()
            ->column();
    }

    public function afterSave($insert, $changedAttributes)
    {
        try {
            if (!$insert) {
                if (isset($changedAttributes['is_active'])) {
                    return;
                }
            }

            $myObj = new \stdClass();

            $myObj->id = $this->id;
            $myObj->description = $this->animal->description;
            $myObj->nature_id = $this->animal->nature->name;
            $myObj->fur_color_id = $this->animal->furColor->fur_color;
            $myObj->fur_length_id = $this->animal->furLength->fur_length;
            $myObj->size_id = $this->animal->size->size;
            $myObj->sex = $this->animal->sex;

            $myObj->is_active = $this->is_active;
            $myObj->found_date = $this->found_date;
            $myObj->street = $this->location->street;
            $myObj->city = $this->location->city;
            $myObj->district = $this->location->district->name;

            $myJSON = json_encode($myObj);

            if ($insert)
                MosquittoCatcher::makePublish('NEW_POSTED_ANIMAL', $myJSON);

        } catch (\Exception $e){
            return;
        }
    }

    public function deleteInternal()
    {

        if (!$this->beforeDelete()) {
            return false;
        }

        $foundAnimal = FoundAnimal::findOne($this->id);
        $foundAnimal->is_active = false;
        $result = $foundAnimal->save();

        $this->afterDelete();

        return $result;
    }
}

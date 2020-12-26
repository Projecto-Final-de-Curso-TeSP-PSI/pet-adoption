<?php

namespace common\models;


use phpDocumentor\Reflection\Utils;
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
            [['id', 'owner_id', 'missing_date'], 'required'],
            [['id', 'owner_id'], 'integer'],
            [['missing_date'], 'safe'],
            [['is_missing'], 'boolean'],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['id' => 'id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_id' => 'id']],
            ['missing_date', 'validateDate']
        ];
    }

    public function validateDate($attribute, $params, $validator){
        $today = date("d/m/Y");
        $inputDate = $this->$attribute;

        if($inputDate > $today)
            $this->addError($attribute, 'Data não pode estar no futuro.');
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

    /**
     * Gets query for [[Owner]].
     *
     * @return string
     */
    public function getMissingDate()
    {
        return $this->missing_date;
    }

    /**
     * Gets an array with all the districs id's that have missing animals registered
     * @return array
     */
    public static function getAllAddressesIds(){
        return self::find()
            ->innerJoinWith('owner')
            ->select('address_id')
            ->column();
    }

}

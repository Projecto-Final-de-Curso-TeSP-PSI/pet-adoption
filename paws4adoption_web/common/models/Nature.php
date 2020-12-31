<?php

namespace common\models;

use phpDocumentor\Reflection\Types\Integer;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "nature".
 *
 * @property int $id
 * @property int $parent_nature_id
 * @property string|null $name
 *
 * @property Animal[] $animals
 */
class Nature extends \yii\db\ActiveRecord
{
    const SCENARIO_SPECIE = 'specie';
    const SCENARIO_SUB_SPECIE = 'sub-specie';

    /**
     * Set the default scenarios
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_SPECIE] = ['name'];
        $scenarios[self::SCENARIO_SUB_SPECIE] = ['name', 'parent_nature_id'];
        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nature';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45],
            [['parent_nature_id'], 'integer'],
            [['parent_nature_id'], 'required', 'on' => self::SCENARIO_SUB_SPECIE],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_nature_id' => 'Parent Nature ID',
            'name' => 'Espécie',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['nature_id' => 'id']);
    }

    /**
     * Gets query for [[Nature]].
     *
     * @return string
     */
    public function getNameByParentId(){
        return $this->findOne(['id' => $this->parent_nature_id])->name;
    }

    /**
     * Get's the id by the nature name
     * @param $nature
     * @return mixed
     */
    public static function getId($nature){
        $instance = self::find()
            ->where(['name' => $nature])
            ->one();
        return $instance->id;
    }

    /**
     * Get's all parent nature id's
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getParentNatureIds(){
        return self::find()->where(['parent_nature_id' => null])->all();
    }

    /**
     * Devolve array de todas as raças dos gatos registados na base de dados
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getExistingNatureCat()
    {
        return self::find()
            ->innerJoinWith('animals')
            ->where(['in', 'animals.nature_id', Animal::getAllNatureIds()])
            ->where(['parent_nature_id' => 1])
            ->orderBy('name')
            ->all();
    }

    /**
     * Devolve array de todas as raças dos cães registados na base de dados
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getExistingNatureDog()
    {
        return self::find()
            ->innerJoinWith('animals')
            ->where(['in', 'animals.nature_id', Animal::getAllNatureIds()])
            ->where(['parent_nature_id' => 2])
            ->orderBy('name')
            ->all();
    }

    /**
     * Get's all child id's from the parent id that comes by parameter
     * @param $parentNatureId
     * @return array
     */
    public static function getChildsIdsByParentId($parentNatureId)
    {
        // Devolve array
        return self::find()->where(['parent_nature_id' => $parentNatureId])->select('id')->column();
    }

    /**
     * Get's an array with all id and name of all parents species
     * @return array
     */
    public static function getParentsArray()
    {
        return ArrayHelper::map(Nature::find()->where(['parent_nature_id' => null])->all(), 'id', 'name');
    }

}

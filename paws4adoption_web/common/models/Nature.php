<?php

namespace common\models;

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
            [['parent_nature_id'], 'required'],
            [['parent_nature_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
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

    public static function getId($nature){
        $instance = self::find()
            ->where(['name' => $nature])
            ->one();
        return $instance->id;
    }

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

    public static function getChildsIdsByParentId($parentNatureId)
    {
        // Devolve array
        return self::find()->where(['parent_nature_id' => $parentNatureId])->select('id')->column();
    }
}

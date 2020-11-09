<?php

namespace common\models;

use Yii;

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
            'name' => 'Name',
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
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property int $id
 * @property string $caption
 * @property string $name
 * @property string $extension
 * @property int $id_animal
 *
 * @property Animal $animal
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caption', 'name', 'extension', 'id_animal'], 'required'],
            [['id_animal'], 'integer'],
            [['caption'], 'string', 'max' => 45],
            [['name'], 'string', 'max' => 50],
            [['extension'], 'string', 'max' => 10],
            [['id_animal'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['id_animal' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'name' => 'Name',
            'extension' => 'Extension',
            'id_animal' => 'Id Animal',
        ];
    }

    /**
     * Gets query for [[Animal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimal()
    {
        return $this->hasOne(Animal::className(), ['id' => 'id_animal']);
    }

    public function getImgPath(){
        return '@images/' . $this->name . '.' . $this->extension;
    }
}

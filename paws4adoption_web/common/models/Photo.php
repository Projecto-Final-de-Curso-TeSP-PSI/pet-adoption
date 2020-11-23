<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property int $id
 * @property string|null $caption
 * @property string|null $imgPath
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
            [['id_animal'], 'required'],
            [['id_animal'], 'integer'],
            [['caption'], 'string', 'max' => 45],
            [['imgPath'], 'string', 'max' => 255],
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
            'imgPath' => 'Img Path',
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
}

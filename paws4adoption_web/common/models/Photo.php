<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property int $id
 * @property string|null $caption
 * @property string|null $img
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
            [['caption'], 'string', 'max' => 45],
            [['img'], 'string', 'max' => 255],
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
            'img' => 'Img',
        ];
    }
}

<?php

namespace backend\modules\api\models;

use common\models\Photo;
/**
* @property Photo $photo
*/
class Animal extends \common\models\Animal{

    /**
     * Override over fields method of the class ActiveController
     * @return array|false
     */
    public function fields(){
        $fields = [
            'id',
            'chipId',
            'description',
            'nature' => 'nature',
            'fur_color' => 'furColor',
            'fur_length' => 'furLength',
            'size' => 'size',
            'sex',
            'name',
            'type',
            'createdAt',
            'adoptionAnimal',
            'missingAnimal',
            'foundAnimal',
            'photo'
        ];
        return $fields;
    }

    /**
     * Set's the extar fields configuration for the animal class in the rest api
     * @return array|false
     */
    public function extraFields()
    {
        return [
            'adoptionAnimal',
            'missingAnimal',
            'foundAnimal',
            'type',
            'nature',
            'size',
            'furLength',
            'furColor',
        ];
    }

    /**
     * Gets query for [[AdoptionAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionAnimal()
    {
        return $this->hasOne(AdoptionAnimal::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[MissingAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMissingAnimal()
    {
        return $this->hasOne(MissingAnimal::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[FoundAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoundAnimal()
    {
        return $this->hasOne(FoundAnimal::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Nature]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNature()
    {
        return $this->hasOne(Nature::className(), ['id' => 'nature_id']);
    }

//    public function getPhotos()
//    {
//        return $this->hasMany(Photo::className(), ['id_animal' => 'id']);
//    }

    public function getPhoto()
    {
        return $this->photos[0]->imgBase64;
    }
}
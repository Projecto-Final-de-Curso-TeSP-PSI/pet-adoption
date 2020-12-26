<?php

namespace backend\modules\api\models;

class MissingAnimal extends \common\models\MissingAnimal{

    /**
     * Override over the fields of the MissingAnimal model
     * @return array|false
     */
//    public function fields(){
//        return[
//            'id' => 'id',
//            'missing_date' => 'missing_date',
//            'is_missing' => 'is_missing',
//            'owner_id',
//            'owner' => 'owner',
//        ];
//    }


    public function extraFields()
    {
        return ['animal', 'owner'];
    }

    /**
     * Override over the relation with the User model
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(\backend\modules\api\models\User::class, ['id' => 'owner_id']);
    }

    public function  getAnimal(){
        return $this->hasOne(\backend\modules\api\models\Animal::className(), ['id' => 'id']);
    }

}
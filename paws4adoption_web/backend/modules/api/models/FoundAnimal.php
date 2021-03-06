<?php

namespace backend\modules\api\models;

class FoundAnimal extends \common\models\FoundAnimal {

    /**
     * Override over the fields of the FoundAnimal model
     * @return array|false
     */
    public function fields(){
        return[
            'id',
            'location',
            'is_active',
            'found_date',
            'priority',
            'user_id',
            'user'
        ];
    }

//    public function extraFields()
//    {
//        return ['animal'];
//    }

    /**
     * Override over the relation with the User model
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\backend\modules\api\models\User::class, ['id' => 'user_id']);
    }

    public function  getAnimal(){
        return $this->hasOne(\backend\modules\api\models\Animal::className(), ['id' => 'id']);
    }

    public function getLocation()
    {
        return $this->hasOne(\backend\modules\api\models\Address::className(), ['id' => 'location_id']);
    }

}
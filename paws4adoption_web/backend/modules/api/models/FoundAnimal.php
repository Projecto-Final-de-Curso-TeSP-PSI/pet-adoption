<?php

namespace backend\modules\api\models;

class FoundAnimal extends \common\models\FoundAnimal {

    /**
     * Override over the fields of the FoundAnimal model
     * @return array|false
     */
    public function fields(){
        return[
            'id' => 'id',
            'location' => 'location',
            'is_active' => 'is_active',
            'found_date' => 'found_date',
            'priority' => 'priority',
            'publisher_user' => 'user'
        ];
    }

    /**
     * Override over the relation with the User model
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\backend\modules\api\models\User::class, ['id' => 'user_id']);
    }

}
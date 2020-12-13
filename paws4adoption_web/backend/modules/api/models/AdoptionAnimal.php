<?php

namespace backend\modules\api\models;

class AdoptionAnimal extends \common\models\AdoptionAnimal {

    /**
     * Override over the fields of the AdoptionAnimal model
     * @return array|false
     */
    public function fields(){
        return[
            'id' => 'id',
            'is_on_fat' => 'is_on_fat',
            'organization',
            'associatedUser'
        ];
    }

    /**
     * Override over the relation with the User model
     * @return \yii\db\ActiveQuery
     */
    public function getAssociatedUser()
    {
        return $this->hasOne(\backend\modules\api\models\User::class, ['id' => 'associated_user_id']);
    }

    /**
     * Override over the relation with the Organization model
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(\backend\modules\api\models\Organization::class, ['id' => 'organization_id']);
    }

}
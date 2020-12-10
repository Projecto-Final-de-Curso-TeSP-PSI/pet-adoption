<?php

namespace backend\modules\api\models;

class Address extends \common\models\Address{

    /**
     * Override over the fields of the MissingAnimal model
     * @return array|false
     */
    public function fields(){

        $fields = parent::fields();

        unset($fields['district_id']);
        return array_merge($fields, ['district']);
    }

}

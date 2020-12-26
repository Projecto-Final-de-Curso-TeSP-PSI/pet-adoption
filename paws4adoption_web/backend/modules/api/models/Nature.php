<?php

namespace backend\modules\api\models;

class Nature extends \common\models\Nature {

    /**
     * Override over the fields of the MissingAnimal model
     * @return array|false
     */
    public function fields(){

        $fields = parent::fields();


        return array_merge($fields, ['nameByParentId']);
    }

}

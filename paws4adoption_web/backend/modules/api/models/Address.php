<?php

namespace backend\modules\api\models;

use common\models\District;

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

    public function rules(){
        return [

            [['postal_code', 'street_code', 'district_id'], 'integer'],
            [['street', 'city', 'district_id'], 'required'],
            [['door_number', 'floor'], 'string', 'max' => 16],
            [['street', 'city'], 'string', 'max' => 64],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['city'], 'required', 'on' => self::SCENARIO_FOUND_ANIMAL],
        ];
    }
}

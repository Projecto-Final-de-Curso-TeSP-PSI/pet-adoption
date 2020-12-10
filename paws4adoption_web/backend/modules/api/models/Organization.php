<?php


namespace backend\modules\api\models;

class Organization extends \common\models\Organization
{
    public function fields()
    {
        $fields = parent::fields();

        unset($fields['address_id']);
        array_push($fields, 'address');

        return $fields;
    }

    /**
     * Override over Address model
     * @return \yii\db\ActiveQuery
     */
    public function getAddress()
    {
        return $this->hasOne(\backend\modules\api\models\Address::className(), ['id' => 'address_id']);
    }

}
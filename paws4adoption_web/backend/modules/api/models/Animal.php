<?php

namespace backend\modules\api\models;

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
                'animal_type' => 'type'
            ];

                switch($this->getType()){
                    case 'adoptionAnimal':
                        array_push($fields, 'adoptionAnimal');
                        break;
                    case 'missingAnimal':
                        array_push($fields, 'missingAnimal');
                        break;
                    case 'foundAnimal':
                        array_push($fields, 'foundAnimal');
                        break;
                }

        return $fields;
    }

    public function rules(){
        return [];
    }

    /**
     * Gets query for [[AdoptionAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionAnimal()
    {
        return $this->hasOne(\backend\modules\api\models\AdoptionAnimal::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[MissingAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMissingAnimal()
    {
        return $this->hasOne(\backend\modules\api\models\MissingAnimal::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[FoundAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoundAnimal()
    {
        return $this->hasOne(\backend\modules\api\models\FoundAnimal::class, ['id' => 'id']);
    }

}
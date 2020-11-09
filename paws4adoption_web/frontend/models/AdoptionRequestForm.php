<?php

namespace frontend\models;

use common\models\Adoption;
use yii\base\Model;

class AdoptionRequestForm extends Model
{
    public $motivation;
    public $adoption_animal_id;
    public $adopter_id;

    public Adoption $adoption;

    public function rules()
    {
        $this->adoption = new Adoption();
        return $this->adoption->rules();
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return $this->adoption->attributeLabels();
    }

    public function save(){
        if (!$this->validate()) {
            return null;
        }

        $this->adoption->motivation = $this->motivation;
        $this->adoption->adopted_animal_id = $this->adopter_id;
        $this->adoption->adopter_id = $this->adopter_id;

        //devolve bollean
        $this->adoption->save(false);

    }

}


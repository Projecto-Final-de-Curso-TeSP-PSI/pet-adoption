<?php


namespace frontend\models;


use common\models\FoundAnimal;
use common\models\Photo;
use yii\base\Model;

class FoundAnimalForm extends Model
{

    public $description;
    public $nature_id;
    public $fur_length_id;
    public $fur_color_id;
    public $size_id;

    public $location;
    public $found_date;
    public $is_active;
    public $priority;

    public $user_id;

    public $img;
    public $imgPath;


    private FoundAnimal $foundAnimal;
//    private Photo $_photo;


    public function rules()
    {
        $this->foundAnimal = new FoundAnimal();
        return $this->foundAnimal->rules();
    }

    public function attributeLabels()
    {
        return $this->foundAnimal->attributeLabels();
    }

    public function save(){

        if (!$this->validate()) {
            return null;
        }

        $this->user_id = \Yii::$app->user->id;

//        ESTE IF SERVE APENAS PARA EVITAR QUE O FORM REBENTE POR FALTA DO USER
//        É PARA ELEMINAR NA IMPLEMENTAÇÃO REAL
        if($this->user_id == null){
            $this->user_id = 1;
        }

        $this->foundAnimal->description = $this->description;
        $this->foundAnimal->nature_id = $this->nature_id;
        $this->foundAnimal->fur_length_id = $this->fur_length_id;
        $this->foundAnimal->fur_color_id = $this->fur_color_id;
        $this->foundAnimal->size_id = $this->size_id;

        $this->foundAnimal->location = $this->location;
        $this->foundAnimal->found_date = $this->found_date;
        $this->foundAnimal->is_active = $this->is_active;
        $this->foundAnimal->user_id = $this->user_id;

        $this->foundAnimal->save(false);

        $photo = new Photo();
        $photo->caption = "photo caption test";
        $photo->img = $this->img;

    }
}
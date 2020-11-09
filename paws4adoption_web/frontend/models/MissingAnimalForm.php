<?php


namespace frontend\models;


use common\models\MissingAnimal;
use common\models\Photo;
use phpDocumentor\Reflection\Types\This;
use yii\base\Model;

class MissingAnimalForm extends Model
{
    public $chipId;
    public $description;
    public $nature_id;
    public $fur_length_id;
    public $fur_color_id;
    public $size_id;
    public $sex;
    public $missing_date;
    public $is_missing;

    public $owner_id;

    public $img;
    public $imgPath;

    private MissingAnimal $missingAnimal;
//    private Photo $_photo;


    public function rules()
    {
        $this->missingAnimal = new MissingAnimal();
        return $this->missingAnimal->rules();
    }

    public function attributeLabels()
    {
        return $this->missingAnimal->attributeLabels();
    }

    public function save(){

        if (!$this->validate()) {
            return null;
        }

        $this->owner_id = \Yii::$app->user->id;

//        ESTE IF SERVE APENAS PARA EVITAR QUE O FORM REBENTE POR FALTA DO USER
//        É PARA ELEMINAR NA IMPLEMENTAÇÃO REAL
        if($this->owner_id == null){
            $this->owner_id = 1;
        }

        $this->missingAnimal->chipId = $this->chipId;
        $this->missingAnimal->description = $this->description;
        $this->missingAnimal->nature_id = $this->nature_id;
        $this->missingAnimal->fur_length_id = $this->fur_length_id;
        $this->missingAnimal->fur_color_id = $this->fur_color_id;
        $this->missingAnimal->size_id = $this->size_id;
        $this->missingAnimal->sex = $this->sex;
        $this->missingAnimal->missing_date = $this->missing_date;
        $this->missingAnimal->is_missing = $this->is_missing;
        $this->missingAnimal->owner_id = $this->owner_id;

        $this->missingAnimal->save(false);

        $photo = new Photo();
        $photo->caption = "photo caption test";
        $photo->img = $this->img;

    }
}
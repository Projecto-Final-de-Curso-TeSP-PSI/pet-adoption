<?php


namespace backend\models;


use common\models\AdoptionAnimal;
use common\models\Photo;
use yii\base\Model;

class AdoptionAnimalForm extends Model
{
//    public $chipId;
    public $description;
    public $nature_id;
    public $fur_length_id;
    public $fur_color_id;
    public $size_id;
    public $sex;

    public $is_on_fat;
    public $organization_id;
    public $associated_user_id;

    public $img;
    public $imgPath;

    private AdoptionAnimal $adoptionAnimal;

    public function rules()
    {
        $this->adoptionAnimal = new AdoptionAnimal();
        return $this->adoptionAnimal->rules();
    }

    public function attributeLabels()
    {
        return $this->adoptionAnimal->attributeLabels();
    }

    public function save()
    {
        if (!$this->validate()) {
            return null;
        }

        $this->adoptionAnimal->description = $this->description;
        $this->adoptionAnimal->nature_id = $this->nature_id;
        $this->adoptionAnimal->fur_length_id = $this->fur_length_id;
        $this->adoptionAnimal->fur_color_id = $this->fur_color_id;
        $this->adoptionAnimal->size = $this->size_id;
        $this->adoptionAnimal->sex = $this->sex;
        $this->adoptionAnimal->is_on_fat = $this->is_on_fat;

        $this->adoptionAnimal->save(false);

        $photo = new Photo();
        $photo->caption = "photo caption test";
        $photo->img = $this->img;
    }
}
<?php


namespace frontend\models;


use common\models\Address;
use common\models\User;
use yii\base\Model;

class ProfileForm extends Model
{
    public $firstName;
    public $lastName;
    public $nif;
    public $phone;

    public $street;
    public $door_number;
    public $floor;
    public $postal_code;
    public $street_code;
    public $city;
    public $district_id;


    private $user;
    private Address $address;

//    public

    public function rules()
    {
        $this->user = new User();
        $this->address = new Address();
        $userRules = $this->user->rules();
        $addressRules = $this->address->rules();
        return array_merge($userRules, $addressRules);
    }

    public function save(){

        if (!$this->validate()) {
            return null;
        }

        $loggedUser_id = \Yii::$app->user->id;
        $loggedUser = User::findOne($loggedUser_id);

        $this->address->street = $this->street;
        $this->address->door_number = $this->door_number;
        $this->address->floor = $this->floor;
        $this->address->postal_code = $this->postal_code;
        $this->address->street_code = $this->street_code;
        $this->address->city = $this->city;
        $this->address->district = $this->district_id;
        $this->address->save(false);

        $loggedUser->firstName = $this->firstName;
        $loggedUser->lastName = $this->lastName;
        $loggedUser->nif = $this->nif;
        $loggedUser->phone = $this->phone;
        $loggedUser->address = $this->address->id;

        return $this->user->save(false);
    }
}
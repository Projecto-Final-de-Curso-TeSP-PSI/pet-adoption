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
    public $email;

    public $street;
    public $door_number;
    public $floor;
    public $postal_code;
    public $street_code;
    public $city;
    public $district_id;

    private User $user;
    private Address $address;

    public function rules()
    {
        $this->user = new User();
        $this->address = new Address();
        $userRules = $this->user->rules();
        $addressRules = $this->address->rules();
        return array_merge($userRules, $addressRules);
    }

    public function attributeLabels()
    {
        $userAttributeLabels = $this->user->attributeLabels();
        $addressAttributeLabels = $this->address->attributeLabels();
        return array_merge($userAttributeLabels, $addressAttributeLabels);
    }

    public function save(){

//        if (!$this->validate()) {
//            return null;
//        }

        $loggedUser_id = \Yii::$app->user->id;
        $loggedUser = User::findOne($loggedUser_id);

        $this->address->street = $this->street;
        $this->address->door_number = $this->door_number;
        $this->address->floor = $this->floor;
        $this->address->postal_code = $this->postal_code;
        $this->address->street_code = $this->street_code;
        $this->address->city = $this->city;
        $this->address->district_id = $this->district_id;
        $this->address->save(false);

        $loggedUser->firstName = $this->firstName;
        $loggedUser->lastName = $this->lastName;
        $loggedUser->nif = $this->nif;
        $loggedUser->phone = $this->phone;
        $loggedUser->email = $this->email;
        $loggedUser->address_id = $this->address->id;

        return $loggedUser->save(false);
    }
}
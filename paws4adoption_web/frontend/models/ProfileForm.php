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

    private $loggedUser;
    private $loggedUserAddress;

    public function rules()
    {
        $loggedUser_id = \Yii::$app->user->id;
        $this->loggedUser = User::findOne($loggedUser_id);
        $this->loggedUserAddress = isset($this->loggedUser->address_id) ? Address::findOne($this->loggedUser->address_id) : new Address();
        $userRules = $this->loggedUser->rules();
        $addressRules = $this->loggedUserAddress->rules();
        return array_merge($userRules, $addressRules);
    }

    public function attributeLabels()
    {
        $userAttributeLabels = $this->loggedUser->attributeLabels();
        $addressAttributeLabels = $this->loggedUserAddress->attributeLabels();
        return array_merge($userAttributeLabels, $addressAttributeLabels);
    }

    public function save(){

//        if (!$this->validate()) {
//            return null;
//        }

        $loggedUser_id = \Yii::$app->user->id;
        $this->loggedUser = User::findOne($loggedUser_id);

        $this->loggedUserAddress->street = $this->street;
        $this->loggedUserAddress->door_number = $this->door_number;
        $this->loggedUserAddress->floor = $this->floor;
        $this->loggedUserAddress->postal_code = $this->postal_code;
        $this->loggedUserAddress->street_code = $this->street_code;
        $this->loggedUserAddress->city = $this->city;
        $this->loggedUserAddress->district_id = $this->district_id;
        $this->loggedUserAddress->save();

        $this->loggedUser->firstName = $this->firstName;
        $this->loggedUser->lastName = $this->lastName;
        $this->loggedUser->nif = $this->nif;
        $this->loggedUser->phone = $this->phone;
        $this->loggedUser->email = $this->email;
        $this->loggedUser->address_id = $this->loggedUserAddress->id;

        return $this->loggedUser->save(false);
    }
}
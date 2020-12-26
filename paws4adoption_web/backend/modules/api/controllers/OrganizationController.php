<?php

namespace backend\modules\api\controllers;

use common\models\District;
use common\models\User;
use Yii;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class OrganizationController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\Organization';

//    public function behaviors()
//    {
//      $behaviors =  parent::behaviors();
//      $behaviors['authenticator'] = [
//        'class' => HttpBasicAuth::className(),
//        'auth' => [$this, 'auth']
//        ];
//      return $behaviors;
//    }

    public function auth($username, $password){
        $user = User::findByUsername($username);
        if($user && $user->validatePassword($password)){
            return $user;
        }
    }

    public function actionDistrict($districtId){
        return District::withOrganizations();
    }

}

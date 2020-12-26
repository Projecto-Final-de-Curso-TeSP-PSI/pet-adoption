<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\Organization;
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


    public function actions(){
        $actions = parent::actions();

        unset($actions['index'], $actions['view']);

    }

    /**
    * Action that returns all active organizations
    * @return array|\yii\db\ActiveRecord[]
    */
    public function actionIndex(){
        Yii::$app->response->statusCode = 200;
        return Organization::find()
            ->isActive(true)
            ->all();
    }

    /**
    * Action that returns one active organization, according with the id sent
    */
    public function actionView(){

    }


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

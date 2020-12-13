<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\SignupAPI;
use common\models\LoginForm;
use common\models\User;
use frontend\models\ProfileForm;
use frontend\models\SignupForm;
use Yii;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;
use yii\web\Response;

/**
 * Default controller for the `api` module
 */
class UserController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\User';

    /*public function behaviors()
    {
      $behaviors =  parent::behaviors();
      $behaviors['authenticator'] = [
        'class' => HttpBasicAuth::className(),
        'auth' => [$this, 'auth']
      ];
      return $behaviors;
    }*/

    /*public function auth($username, $password){
        $user = User::findByUsername($username);
        if($user && $user->validatePassword($password)){
            return $user;
        }
    }*/

    public function actions(){
        $actions = parent::actions();
        unset($actions['create']);
//        unset($actions['update']);
//        unset($actions['delete']);
        return $actions;
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SignupAPI();
        $params = Yii::$app->request->post();
        $model->username = $params['username'];
        $model->password=$params['password'];
        $model->email=$params['email'];
        $model->firstName = $params['firstName'];
        $model->lastName = $params['lastName'];
        $model->nif = $params['nif'];
        $model->phone = $params['phone'];
        $model->street = $params['street'];
        $model->door_number = $params['door_number'];
        $model->floor = $params['floor'];
        $model->postal_code = $params['postal_code'];
        $model->street_code = $params['street_code'];
        $model->city = $params['city'];
        $model->district_id = $params['district_id'];

        if ($model->signup()) {
            $response['isSuccess'] = 201;
            $response['message'] = 'You are now a member!';
            $response['user'] =\common\models\User::findByUsername($model->username);
            return $response;
        }
        else {
            $model->getErrors();
            $response['hasErrors'] = $model->hasErrors();
            $response['errors'] = $model->getErrors();
            return $response;

        }
    }

    /**
     * User login.
     *
     * @return mixed
     */
    public function actionLogin(){
        
        $model = new LoginForm();
        $params = Yii::$app->request->post();
        $model->username = $params['username'];
        $model->password = $params['password'];
        if ($model->login()) {
            $response['message'] = 'You are now logged in!';
            $response['user'] = \common\models\User::findByUsername($model->username);
            //return [$response,$model];
            return $response;
        }
        else {
            $model->validate();
            $response['errors'] = $model->getErrors();
            return $response;
        }
    }
}

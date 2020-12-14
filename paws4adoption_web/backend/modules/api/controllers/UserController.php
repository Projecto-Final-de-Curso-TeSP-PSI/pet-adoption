<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\SignupAPI;
use common\models\Address;
use common\models\LoginForm;
use common\models\User;
use frontend\models\ProfileForm;
use frontend\models\SignupForm;
use Yii;
use yii\db\Exception;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;
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
        unset($actions['update']);
        unset($actions['delete']);
        return $actions;
    }

    /**
     * Signs user up.
     *
     * @return mixed
     * @throws Exception
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
            Yii::$app->response->statusCode = 201;
            $response['message'] = 'You are now a member!';
            $response['user'] =\common\models\User::findByUsername($model->username);
            return $response;
        }
        else {
            throw new Exception("Something went terribly wrong.");
        }
    }

    
    public function actionUpdate($id){

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();

        try {
            $post = Yii::$app->request->post();

            $user = \backend\modules\api\models\User::findIdentity($id);

            if($user == null){
                Yii::$app->response->statusCode = 404;
                throw new NotFoundHttpException("User id not found.");
            }

            $user->phone = $post['phone'];
            $user->email = $post['email'];

            $userAddress = $user->address;
            $userAddress->street = $post['street'];
            $userAddress->door_number = $post['door_number'];
            $userAddress->floor = $post['floor'];
            $userAddress->postal_code = $post['postal_code'];
            $userAddress->street_code = $post['street_code'];
            $userAddress->city = $post['city'];
            $userAddress->district_id = $post['district_id'];

            $userAddress->save(false);
            $user->save(false);

            $transaction->commit();

        } catch (\Exception $e) {
            $transaction->rollBack();
            return $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            return $e;
        }

        Yii::$app->response->statusCode = 200;
        Yii::$app->response->statusText = "User updated successfully.";
        return $user;
    }

    public function actionDelete($id){

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
            $response['token'] = \common\models\User::findByUsername($model->username)->auth_key;
            return $response;
        }
        else {
            $model->validate();
            $response['errors'] = $model->getErrors();
            return $response;
        }
    }
}

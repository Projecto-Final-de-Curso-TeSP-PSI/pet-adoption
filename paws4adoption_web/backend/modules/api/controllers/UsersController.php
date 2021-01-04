<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\MissingAnimal;
use backend\modules\api\models\SignupAPI;
use common\models\Address;
use common\models\LoginForm;
use common\models\User;
use InvalidArgumentException;
use Yii;
use yii\db\Exception;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;
use yii\web\BadRequestHttpException;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * Default controller for the `api` module
 */
class UsersController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\User';

    public function behaviors()
    {
        $behaviors =  parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'except' => ['token', 'validation', 'create'],
            'authMethods' => [
                HttpBasicAuth::className(),
                HttpBearerAuth::className(),
                QueryParamAuth::className(),
            ],
        ];
        return $behaviors;
    }

    /**
     * @param $username
     * @param $password
     * @return User
     */
    private function auth($username, $password){
        $user = User::findByUsername($username);
        if($user && $user->status == User::STATUS_ACTIVE && $user->validatePassword($password)){
            return $user;
        }
    }

    /**
     * Unsets the Yii2 selected actions
     * @return array
     */
    public function actions(){
        $actions = parent::actions();
        unset($actions['index']);
        unset($actions['view']);
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);
        return $actions;
    }

    /**
     * Get's one user according with the id sent
     * @param $id
     * @return \backend\modules\api\models\User|null
     * @throws NotFoundHttpException
     * @throws ForbiddenHttpException
     */
    public function actionView($id){

        $this->checkAccess('view', null, ['id' => $id]);

        $user = \backend\modules\api\models\User::findOne($id);

        if($user === null || $user->status != \backend\modules\api\models\User::STATUS_ACTIVE)
            throw new NotFoundHttpException('User not found');

        Yii::$app->response->statusCode = 200;
        return $user;
    }

    /**
     * Signs user up.
     *
     * @return mixed
     * @throws Exception
     */
    public function actionCreate()
    {
        try {
            $model = new SignupAPI();
//            $basicAuth = Yii::$app->request->headers['authorization'];
//            $credentials = $this->extractUsernameAndPassword($basicAuth);

            $params = Yii::$app->request->post();

            $model->username = $params['username'];
            $model->password = $params['password'];

            $model->email = $params['email'];
            $model->firstName = $params['firstName'];
            $model->lastName = $params['lastName'];
            $model->nif = $params['nif'];
            $model->phone = $params['phone'];
            $model->street = $params['street'];
            $model->door_number = isset($params['door_number']) ? $params['door_number'] : null;
            $model->floor = isset($params['floor']) ? $params['floor'] : null;
            $model->postal_code = $params['postal_code'];
            $model->street_code = $params['street_code'];
            $model->city = $params['city'];
            $model->district_id = $params['district_id'];

            if ($model->signup()) {
                Yii::$app->response->statusCode = 201;

                return \backend\modules\api\models\User::findByUsername($model->username);
            }
            else {
                throw new Exception("Something went terribly wrong.");
            }
        } catch (Exception $yiiDbException){
            throw $yiiDbException;
        }
    }

    /**
     * @param $id
     * @return User|\Exception|\Throwable|\yii\web\IdentityInterface
     * @throws ForbiddenHttpException
     */
    public function actionUpdate($id){

        $this->checkAccess('update', null, ['id' => $id]);

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
        return $user;
    }

    /**
     * @param $id
     * @return mixed
     * @throws Exception
     * @throws ForbiddenHttpException
     * @throws NotFoundHttpException
     * @throws \Throwable
     */
    public function actionDelete($id){

        $this->checkAccess('delete', null, ['id' => $id]);

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();

        try {
            $user = \backend\modules\api\models\User::findIdentity($id);

            if($user == null){
                throw new NotFoundHttpException("User id not found.");
            }

            $user->status = \backend\modules\api\models\User::STATUS_DELETED;
            $user->save();

            $transaction->commit();
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            throw $e;
        }

        $response['message'] = "User successfully deleted.";
        return $response;
    }

    /**
     * Returns the authenticated User token.
     *
     * @return mixed
     * @throws \Exception
     */
    public function actionToken(){
        try{
            $params = Yii::$app->request->post();

            $user = $this->auth($params['username'], $params['password']);
            if ($user === null){
                throw new UnauthorizedHttpException('Wrong username or password');
            }
            $response['success'] = true;
            $response['token'] = User::findByUsername($user->username)->auth_key;
        } catch (\Exception $e){
            throw $e;
        }
        return $response;
    }

    /**
     * @param $idvalidation
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionValidation($idvalidation){
        try{
            $model = new $this->modelClass;
            $user = $model->find()->where(['verification_token' => $idvalidation])->one();
            if(is_null($user)){
                Yii::$app->response->statusCode = 401;
                $message['Validation Process'] = 'Error';
                $message['Error'] = 'Not known validation key';
            } else{
                if($user->status != User::STATUS_INACTIVE){
                    Yii::$app->response->statusCode = 401;
                    $message['Validation result'] = 'Error';
                    $message['Error'] = 'User not waiting for activation';
                } else{
                    $user->status = User::STATUS_ACTIVE;
                    if($user->save()){
                        $message['Validation Process'] = 'SUCCESS';
                    } else{
                        Yii::$app->response->statusCode = 401;
                        $message['Validation result'] = 'Error';
                        $message['Error'] = 'Not able to save user';
                    }
                }
            }
        } catch (BadRequestHttpException $e){
            throw $e;
        } catch (\Exception $e){
            throw new InvalidArgumentException();
        }
        return $message;
    }

    /**
     * @param string $action
     * @param null $model
     * @param array $params
     * @throws ForbiddenHttpException
     * @throws NotFoundHttpException
     */
    public function checkAccess($action, $model = null, $params = [])
    {
        if($action === 'index'){
            throw new ForbiddenHttpException("You dont have permission to list all the users.");
        }

        if(in_array($action, ['view', 'update', 'delete'])){

            $model = User::findOne($params['id']);
            if($model === null){
                throw new \yii\web\NotFoundHttpException("User not found");
            }

            if(Yii::$app->user->can('manageUser', ['id' => $params['id']]) == false){
                throw new \yii\web\ForbiddenHttpException("You dont have permission to " . $action . " this record");
            }
        }
    }
}


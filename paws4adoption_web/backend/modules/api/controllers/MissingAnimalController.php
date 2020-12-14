<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\AdoptionAnimal;
use backend\modules\api\models\Animal;
use backend\modules\api\models\FoundAnimal;
use backend\modules\api\models\MissingAnimal;
use common\models\Photo;
use common\models\User;
use http\Client\Response;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;
use yii\web\BadRequestHttpException;
use yii\web\ForbiddenHttpException;
use yii\web\JsonResponseFormatter;
use yii\web\NotFoundHttpException;
use backend\modules\api\utils\Utils;


class MissingAnimalController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\MissingAnimal';

    public function behaviors()
    {
        $behaviors =  parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::className(),
//            'class' => CompositeAuth::className(),
            'except' => ['index','view'],
            'auth' => [$this, 'auth'],
//            'authMethods' => [
//                HttpBasicAuth::className(),
//                HttpBearerAuth::className(),
//                QueryParamAuth::className(),
        ];

        return $behaviors;
    }

    public function auth($username, $password){
        $user = User::findByUsername($username);
        if($user && $user->validatePassword($password)){
            return $user;
        }
    }

    /**
     * @param string $action
     * @param null $model
     * @param array $params
     * @throws ForbiddenHttpException
     * @throws NotFoundHttpException
     */
    public function checkAccess($action, $model = null, $params = []){

        //Redundante, pois todos os users têm acesso a esta permissão
        if($action === 'create' && Yii::$app->user->can('createMissingAnimal') == false){
            throw new \yii\web\ForbiddenHttpException("You dont have permition to create missing animals");
        }

        if(in_array($action, ['update', 'delete'])){

            $model = MissingAnimal::findOne($params['id']);
            if($model === null){
                throw new \yii\web\NotFoundHttpException("Missing animal not found");
            }

            if(Yii::$app->user->can('manageMissingAnimal', ['animal_type' => 'missingAnimal', 'animal_id' => $params['id']]) == false){
                throw new \yii\web\ForbiddenHttpException("You dont have permition to " . $action . " this record");
            }

        }

    }

    public function actions(){
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);
        return $actions;
    }

    public function actionCreate(){
        try{
            $this->checkAccess( 'create', null, null );

            $post = Yii::$app->request->post();


            $animal = Utils::createAnimal($post, 'missingAnimal');
        }
        catch (\Exception $e){
            throw new BadRequestHttpException($e->getMessage() , $e->getCode(), $e);
        }
        Yii::$app->response->statusCode = 201;
        return $animal;
    }

    public function actionUpdate($id){
        $this->checkAccess( 'update', null, ['id' => $id]);

        $request = Yii::$app->request;

        if ($request->post() === null)
            return new BadRequestHttpException("Body data not sent");

        $post = $request->post();
        $animal = Utils::updateAnimal($id, $post, 'missingAnimal');

        Yii::$app->response->statusCode = 200;
        return $animal;
    }

    public function actionDelete($id){
        $this->checkAccess( 'delete', null, ['id' => $id]);

        $animal = Utils::deleteAnimal($id, 'missingAnimal');

        Yii::$app->response->statusCode = 200;
        return $animal;
    }
}

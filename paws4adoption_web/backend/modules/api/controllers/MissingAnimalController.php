<?php

namespace backend\modules\api\controllers;

use backend\modules\api\exceptions\SaveAnimalException;

use backend\modules\api\models\MissingAnimal;
use common\models\Photo;
use common\models\User;
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
use function Symfony\Component\Console\Tests\Command\createClosure;


class MissingAnimalController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\MissingAnimal';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'except' => ['index', 'view'],
            'authMethods' => [
                HttpBasicAuth::className(),
                HttpBearerAuth::className(),
                QueryParamAuth::className(),
            ],
        ];

        return $behaviors;
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
            throw new \yii\web\ForbiddenHttpException("You dont have permission to create missing animals");
        }

        if(in_array($action, ['update', 'delete'])){

            $model = MissingAnimal::findOne($params['id']);
            if($model === null){
                throw new \yii\web\NotFoundHttpException("Missing animal not found");
            }

            if(Yii::$app->user->can('manageMissingAnimal', ['animal_type' => 'missingAnimal', 'animal_id' => $params['id']]) == false){
                throw new \yii\web\ForbiddenHttpException("You dont have permission to " . $action . " this record");
            }

        }

    }

    public function actions(){
        $actions = parent::actions();
        unset($actions['index']);
        unset($actions['view']);
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);
        return $actions;
    }

    public function actionIndex(){
        Yii::$app->response->statusCode = 200;
        return \backend\modules\api\models\MissingAnimal::find()
            ->isStillMissing()
            ->all();
    }

    public function actionView($id){
        $missingAnimal = \backend\modules\api\models\MissingAnimal::findOne($id);

        if($missingAnimal == null || $missingAnimal->is_missing == false)
            throw new NotFoundHttpException('Missing animal not found');

        Yii::$app->response->statusCode = 200;
        return $missingAnimal;
    }

    public function actionCreate(){

        try{
            $post = Yii::$app->request->post();

            $animal = Utils::createAnimal($post, 'missingAnimal');

        } catch(\Exception $e){
            throw $e;
        }

        Yii::$app->response->statusCode = 201;
        return $animal;
    }

    public function actionUpdate($id){
        $this->checkAccess('update', null, ['id' => $id]);

        $missingAnimal = \backend\modules\api\models\MissingAnimal::findOne($id);
        if($missingAnimal == null || $missingAnimal->is_missing == false)
            throw new NotFoundHttpException('Missing animal not found');

        $post = Yii::$app->request->post();

        $animal = Utils::updateAnimal($id, $post,'missingAnimal');

        Yii::$app->response->statusCode = 200;
        return $animal;
    }

    public function actionDelete($id){
        $this->checkAccess( 'delete', null, ['id' => $id]);

        $missingAnimal = \backend\modules\api\models\MissingAnimal::findOne($id);

        if($missingAnimal == null || $missingAnimal->is_missing == false)
            throw new NotFoundHttpException('Missing animal not found');

        try {
//            $missingAnimal->is_missing = false;
//            $missingAnimal->save();

            $missingAnimal->delete();

        } catch (NotFoundHttpException $e){
            throw $e;
        } catch (\Exception $e) {
            throw new SaveAnimalException("Error on deleting animal on the database", 400, $e);
        } catch(\Throwable $e){
            throw new SaveAnimalException("Error on deleting animal on the database", 400, $e);
        }

        Yii::$app->response->statusCode = 200;
        return $missingAnimal;
    }
}

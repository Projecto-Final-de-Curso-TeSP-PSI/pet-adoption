<?php

namespace backend\modules\api\controllers;

use \backend\modules\api\exceptions\SaveAnimalException;

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


class MissingAnimalsController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\MissingAnimal';

    /**
     * Overrides the behaviours of the parent class
     * @return array
     */
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
     * Override the checkAccess method of the ActiveController parent class
     *
     * @param string $action
     * @param null $model
     * @param array $params
     * @throws ForbiddenHttpException
     * @throws NotFoundHttpException
     */
    public function checkAccess($action, $model = null, $params = []){

        if($action === 'create' && Yii::$app->user->can('createMissingAnimal') == false){
            throw new \yii\web\ForbiddenHttpException("You dont have permission to create missing animals");
        }

        //Check if the user that is asking for the service has authorization to handle that record
        //(only admin and the author for the creation of the animal)
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

    /**
     * Overrides the actions method of the ActiveControllet parent classe
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
     * Get's all missing animals that are still missing
     * @return array|\yii\db\ActiveRecord[]
     */
    public function actionIndex(){
        Yii::$app->response->statusCode = 200;
        return \backend\modules\api\models\FoundAnimal::find()
            ->onCondition(['is_missing' => true])
            ->all();
    }

    /**
     * Get's one missing animal according with the id sent
     * @param $id
     * @return MissingAnimal|null
     * @throws NotFoundHttpException
     */
    public function actionView($id){
        $missingAnimal = \backend\modules\api\models\MissingAnimal::findOne($id);

        if($missingAnimal == null || $missingAnimal->is_missing == false)
            throw new NotFoundHttpException('Missing animal not found');

        Yii::$app->response->statusCode = 200;
        return $missingAnimal;
    }

    /**
     * Creates a missing animal
     * @return \backend\modules\api\models\FoundAnimal|MissingAnimal
     * @throws \Exception
     */
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

    /**
     * Updates a missing animal
     * @param $id
     * @return \backend\modules\api\models\FoundAnimal|MissingAnimal|BadRequestHttpException|null
     * @throws BadRequestHttpException
     * @throws ForbiddenHttpException
     * @throws NotFoundHttpException
     * @throws SaveAnimalException
     * @throws \backend\modules\api\exceptions\PhotoSaveException
     * @throws \backend\modules\api\exceptions\PhotoUploadException
     */
    public function actionUpdate($id){

        $this->checkAccess('update', null, ['id' => $id]);

        $missingAnimal = \backend\modules\api\models\MissingAnimal::findOne($id);
        if($missingAnimal == null || $missingAnimal->is_missing == false)
            throw new NotFoundHttpException('Missing animal not found');

        $request = Yii::$app->request;

        if ($request->post() === null)
            return new BadRequestHttpException("Body error");

        $post = Yii::$app->request->post();
        $animal = Utils::updateAnimal($id, $post,'missingAnimal');

        Yii::$app->response->statusCode = 200;
        return $animal;
    }

    /**
     * Deletes a missing animal
     * @param $id
     * @return MissingAnimal|null
     * @throws ForbiddenHttpException
     * @throws NotFoundHttpException
     * @throws SaveAnimalException
     */
    public function actionDelete($id){
        $this->checkAccess( 'delete', null, ['id' => $id]);

        $missingAnimal = \backend\modules\api\models\MissingAnimal::findOne($id);

        try {

            if($missingAnimal == null || $missingAnimal->is_missing == false)
                throw new NotFoundHttpException('Missing animal not found');

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

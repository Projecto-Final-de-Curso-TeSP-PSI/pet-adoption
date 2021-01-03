<?php

namespace backend\modules\api\controllers;

use backend\modules\api\exceptions\SaveAnimalException;
use backend\modules\api\models\AdoptionAnimal;
use backend\modules\api\models\Animal;
use backend\modules\api\models\FoundAnimal;
use backend\modules\api\models\MissingAnimal;
use common\models\District;
use common\models\Photo;
use common\models\User;
use GuzzleHttp\Psr7\Query;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;
use yii\web\BadRequestHttpException;
use yii\web\ForbiddenHttpException;
use backend\modules\api\utils\Utils;
use yii\web\NotFoundHttpException;
use function Sodium\add;


class FoundAnimalsController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\FoundAnimal';

    /**
     * Overrides the behaviours of the parent class
     * @return array
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'except' => ['index', 'view', 'district'],
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
    public function checkAccess($action, $model = null, $params = [])
    {

        //Redundante, pois todos os users têm acesso a esta permissão
        if ($action === 'create' && Yii::$app->user->can('createFoundAnimal') == false) {
            throw new \yii\web\ForbiddenHttpException("You dont have permition to create found animals");
        }

        //Check if the user that is asking for the service has autorization to handle that record
        //(only admin and the author for the creation of the animal)
        if (in_array($action, ['update', 'delete'])) {

            $model = FoundAnimal::findOne($params['id']);
            if ($model === null) {
                throw new \yii\web\NotFoundHttpException("Found animal not found");
            }

            if (Yii::$app->user->can('manageFoundAnimal', ['animal_type' => 'foundAnimal', 'animal_id' => $params['id']]) == false) {
                throw new \yii\web\ForbiddenHttpException("You dont have permition to " . $action . " this record");
            }

        }

    }

    /**
     * Overrides the actions method of the ActiveControllet parent classe
     * @return array
     */
    public function actions(){
        $actions = parent::actions();
        unset(
            $actions['index'],
            $actions['view'],
            $actions['create'],
            $actions['update'],
            $actions['delete']
        );
        return $actions;
    }

    /**
     * Creates a found animal
     * @return Animal
     * @throws BadRequestHttpException
     */
    public function actionCreate()
    {

        try {
            $this->checkAccess('create', null, null);

            $post = Yii::$app->request->post();

            $animal = Utils::createAnimal($post, 'foundAnimal');
        } catch (\Exception $e) {
            throw new BadRequestHttpException($e->getMessage(), $e->getCode(), $e);
        }
        Yii::$app->response->statusCode = 201;

        return $animal;

    }

    /**
     * Updates a found animal
     * @param $id
     * @return FoundAnimal|MissingAnimal|BadRequestHttpException|null
     * @throws BadRequestHttpException
     * @throws ForbiddenHttpException
     * @throws NotFoundHttpException
     * @throws SaveAnimalException
     * @throws \backend\modules\api\exceptions\PhotoSaveException
     * @throws \backend\modules\api\exceptions\PhotoUploadException
     */
    public function actionUpdate($id)
    {

        $this->checkAccess('update', null, ['id' => $id]);

        $foundAnimal = \backend\modules\api\models\FoundAnimal::findOne($id);
        if ($foundAnimal == null || $foundAnimal->is_active == false)
            throw new NotFoundHttpException('Found animal not found');

        $request = Yii::$app->request;

        if ($request->post() === null)
            return new BadRequestHttpException("Body error");

        $post = $request->post();
        $animal = Utils::updateAnimal($id, $post, 'foundAnimal');

        Yii::$app->response->statusCode = 200;
        return $animal;
    }

    /**
     * Deletes a found animal
     * @param $id
     * @return Animal
     * @throws ForbiddenHttpException
     * @throws NotFoundHttpException
     * @throws SaveAnimalException
     */
    public function actionDelete($id)
    {
        $this->checkAccess('delete', null, ['id' => $id]);

        $foundAnimal = \backend\modules\api\models\FoundAnimal::findOne($id);

        try {

            if ($foundAnimal == null || $foundAnimal->is_active == false)
                throw new NotFoundHttpException('Found animal not found');

            $foundAnimal->delete();

        } catch (NotFoundHttpException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new SaveAnimalException("Error on deleting animal on the database", 400, $e);
        } catch (\Throwable $e) {
            throw new SaveAnimalException("Error on deleting animal on the database", 400, $e);
        }

        Yii::$app->response->statusCode = 200;
        return Animal::findOne($foundAnimal->id);
    }

    public function actionDistrict($id)
    {
        if (District::findOne($id) == null)
            throw new NotFoundHttpException('District not found');

        Yii::$app->response->statusCode = 200;
        $foundAnimals = \backend\modules\api\models\FoundAnimal::find()
            ->where(['in', 'location_id', (new \yii\db\Query())->select('id')->from('address')->where(['district_id' => $id])])
            ->onCondition(['is_active' => true])
            ->all();

        if(count($foundAnimals) == 0 ){
            return $response['Message'] = 'No data matches your criteria';
        }else{
            return $foundAnimals;
        }
    }
}

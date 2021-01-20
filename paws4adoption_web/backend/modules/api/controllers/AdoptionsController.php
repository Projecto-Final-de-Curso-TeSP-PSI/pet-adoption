<?php


namespace backend\modules\api\controllers;


use common\models\Adoption;
use Yii;
use yii\rest\ActiveController;

class AdoptionsController extends ActiveController
{
    public $modelClass = Adoption::class;

    public function actions()
    {
        $actions = parent::actions();
        unset(
//            $actions['index'],
            $actions['view'],
            $actions['create'],
            $actions['update'],
            $actions['delete']
        );

        return $actions;
    }

    public function actionCreate()
    {
        try {
            $params = Yii::$app->request->post();

            $model = new Adoption();
            $model->motivation = $params['motivation'];
            $model->adopted_animal_id = $params['adopted_animal_id'];
            $model->adopter_id = $params['adopter_id'];
            $model->type = $params['type'];

            if($model->save()){
                Yii::$app->response->statusCode = 201;
                return $model;
            }
        } catch (\Exception $e){
            throw $e;
        }
    }
}
<?php


namespace backend\modules\api\controllers;


use common\models\Nature;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;

class NatureController extends ActiveController
{
    public $modelClass = 'common\models\Nature';

    public function actionSpecies(){
        return Nature::find()
            ->onCondition(['parent_nature_id' => null])
            ->all();
    }

    public function actionSubSpecies($id){

        if(Nature::find()->where(['parent_nature_id' => $id])->one() == null)
            throw new NotFoundHttpException("Subspecie not found");

        return Nature::find()
            ->onCondition(['parent_nature_id' => $id])
            ->all();
    }

}
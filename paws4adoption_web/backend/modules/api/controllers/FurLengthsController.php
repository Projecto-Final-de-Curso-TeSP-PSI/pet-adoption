<?php


namespace backend\modules\api\controllers;


use yii\rest\ActiveController;

class FurLengthsController extends ActiveController
{
    public $modelClass = 'common\models\FurLength';

    public function actions(){
        $actions = parent::actions();
        unset(
            $actions['view'],
            $actions['create'],
            $actions['update'],
            $actions['delete']
        );
        return $actions;
    }
}
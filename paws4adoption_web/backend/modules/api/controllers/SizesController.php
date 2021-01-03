<?php


namespace backend\modules\api\controllers;


use yii\rest\ActiveController;

class SizesController extends ActiveController
{
    public $modelClass = 'common\models\Size';

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
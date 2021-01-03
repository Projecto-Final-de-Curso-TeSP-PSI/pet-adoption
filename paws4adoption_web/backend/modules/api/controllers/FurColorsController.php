<?php


namespace backend\modules\api\controllers;


use yii\rest\ActiveController;

class FurColorsController extends ActiveController
{
    public $modelClass = 'common\models\FurColor';

    public function actions(){
        $actions = parent::actions();
        unset(
            $actions['view'],
            $actions['create'],
            $actions['update'],
            $actions['delete']
        );
    }
}
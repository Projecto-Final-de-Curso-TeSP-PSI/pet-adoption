<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\Organization;
use common\models\District;
use common\models\User;
use Yii;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */

class OrganizationsController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\Organization';


    public function actions(){
        $actions = parent::actions();

        unset($actions['create'], $actions['update'], $actions['delete']);

        return $actions;
    }

    /**
    * Action that returns all active organizations
    * @return array|\yii\db\ActiveRecord[]
    */
    public function actionIndex(){

        Yii::$app->response->statusCode = 200;
        return Organization::find()
            ->isActive(true)
            ->all();
    }

}

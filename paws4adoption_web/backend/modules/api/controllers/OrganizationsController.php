<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\Organization;
use common\models\District;
use common\models\User;
use Yii;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `api` module
 */

class OrganizationsController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\Organization';

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
    * Action that returns all active organizations
    * @return array|\yii\db\ActiveRecord[]
    */
    public function actionIndex(){

        Yii::$app->response->statusCode = 200;
        return Organization::find()
            ->isActive(true)
            ->all();
    }

    /**
     * Returns the organization
     * @param integer $id The id of the organization
     * @return array|\yii\db\ActiveRecord|null
     * @throws NotFoundHttpException
     */
    public function actionView($id){

        Yii::$app->response->statusCode = 200;
        $organization = Organization::find()
            ->where(['id' => $id])
            ->isActive(true)
            ->one();

        if($organization == null)
            throw new NotFoundHttpException("Organization not found");

        return $organization;
    }

}

<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\Address;
use backend\modules\api\models\AdoptionAnimal;
use backend\modules\api\models\FoundAnimal;
use backend\modules\api\models\MissingAnimal;
use common\models\Animal;
use common\models\District;
use common\models\FurColor;
use common\models\FurLength;
use common\models\Nature;
use common\models\Photo;
use common\models\Size;
use common\models\User;
use Yii;
use yii\db\Exception;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `api` module
 */
class AnimalController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\Animal';

    public function actions(){
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);
        return $actions;
    }

    public function actionAdoptionAnimals(){
        return \backend\modules\api\models\Animal::find()
            ->isAdoptionAnimal()
            ->isAdopted(false)
            ->all();
    }

    public function actionMissingAnimals($id = null){
        return \backend\modules\api\models\Animal::find()
            ->isMissingAnimal()
            ->isStillMissing()
            ->all();
    }

    public function actionFoundAnimals($id = null){
        return \backend\modules\api\models\Animal::find()
            ->isFoundAnimal()
            ->isStillOnStreet()
            ->all();
    }
}

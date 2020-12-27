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
class AnimalsController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\Animal';

    /**
     * Overrides the actions method of the ActiveControllet parent classe
     * @return array
     */
    public function actions(){
        $actions = parent::actions();
        unset($actions['index'], $actions['view']);
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);
        return $actions;
    }

    /**
     * Get's all animals that are active
     * @return array|\yii\db\ActiveRecord[]
     */
    public function actionIndex(){

        $missingAnimals = \backend\modules\api\models\Animal::find()
            ->isMissingAnimal()
            ->isStillMissing(true)
            ->all();

        $foundAnimals = \backend\modules\api\models\Animal::find()
            ->isFoundAnimal()
            ->isStillOnStreet(true)
            ->all();


        $animals = array_merge($missingAnimals, $foundAnimals);

        return $animals;
    }

    /**
     * Get's one animal according with the id sent
     * @param $id
     * @return \backend\modules\api\models\Animal
     * @throws NotFoundHttpException
     */
    public function actionView($id){

        $animal = \backend\modules\api\models\Animal::findOne($id);
        if($animal == null){
            throw new NotFoundHttpException('Animal not found');
        }

        switch($animal->getType()){

            case 'adoptionAnimal':
                $adoptionAnimal = $animal->adoptionAnimal;
                if($adoptionAnimal->adoption != null && $adoptionAnimal->is_on_fat == false)
                    throw new NotFoundHttpException('Animal not found');
                break;

            case 'missingAnimal':
                if($animal->missingAnimal->is_missing == false)
                    throw new NotFoundHttpException('Animal not found');
                break;

            case 'foundAnimal':
                if($animal->foundAnimal->is_active == false)
                    throw new NotFoundHttpException('Animal not found');
                break;
        }

        Yii::$app->response->statusCode = 200;
        return $animal;
    }
}

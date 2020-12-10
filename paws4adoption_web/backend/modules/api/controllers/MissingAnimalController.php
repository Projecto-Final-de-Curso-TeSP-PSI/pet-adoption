<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\AdoptionAnimal;
use backend\modules\api\models\FoundAnimal;
use backend\modules\api\models\MissingAnimal;
use common\models\Animal;
use common\models\Photo;
use common\models\User;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class MissingAnimalController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\MissingAnimal';

    public function behaviors()
    {
        $behaviors =  parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::className(),
            'auth' => [$this, 'auth']
//            'class' => CompositeAuth::className(),
//            'authMethods' => [
//                HttpBasicAuth::className(),
//                HttpBearerAuth::className(),
//                QueryParamAuth::className(),
//            ],
        ];
        return $behaviors;
    }

    public function auth($username, $password){
        $user = User::findByUsername($username);
        if($user && $user->validatePassword($password)){
            return $user;
        }
    }

}

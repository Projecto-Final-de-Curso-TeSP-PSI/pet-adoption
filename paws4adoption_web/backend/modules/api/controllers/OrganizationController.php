<?php

namespace backend\modules\api\controllers;

use common\models\Organization;
use common\models\User;
use Yii;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class OrganizationController extends ActiveController
{
    public $modelClass = 'common\models\Organization';

    public function behaviors()
    {
      $behaviors =  parent::behaviors();
      $behaviors['authenticator'] = [
        'class' => HttpBasicAuth::className(),
        'auth' => [$this, 'auth']
        ];
      return $behaviors;
    }

    public function auth($username, $password){
        $user = User::findByUsername($username);
        if($user && $user->validatePassword($password)){
            return $user;
        }
    }

    public function actionDistrict($districtId){
       $query = Yii::$app->db
            ->createCommand('
                SELECT *
                FROM organizations o
                    LEFT JOIN address a ON a.id = o.address_id 
                    LEFT JOIN districts d ON d.id = a.district_id
                WHERE a.id IS NOT NULL and d.id IS NOT NULL AND d.id = ' . $districtId)
            ->queryAll();
       /* = Organization::find()
           ->joinWith('address')
           ->where(['district_id' => $districtId])
           ->all();*/

        return $query;
    }
}

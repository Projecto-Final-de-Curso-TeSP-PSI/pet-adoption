<?php

namespace backend\modules\api\controllers;

use common\models\District;
use common\models\Organization;
use common\models\User;
use Symfony\Component\Finder\Tests\Iterator\DateRangeFilterIteratorTest;
use Yii;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class DistrictController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\District';

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


    public function actionWithorganizations(){
//       $query = Yii::$app->db
//            ->createCommand
//                ('
//                    SELECT d.id, d.name
//                    FROM districts d
//                        INNER JOIN address a ON a.district_id = d.id
//                        INNER JOIN organizations o ON a.id = o.address_id
//                    GROUP BY d.id
//                ')
//            ->queryAll();

       $query = District::withOrganizations();

       return $query;
    }

    public function actionWithadoptionanimals(){
//        $query = Yii::$app->db
//            ->createCommand
//            ('
//                    SELECT distinct d.id, d.name
//                    FROM districts d
//                        INNER JOIN address a ON a.district_id = d.id
//                        INNER JOIN organizations o ON o.address_id = a.id
//                        INNER JOIN adoption_animals aa ON aa.organization_id = o.id
//                        LEFT JOIN adoptions ad ON ad.adopted_animal_id = aa.id
//                    WHERE aa.is_on_fat is not null and ad.id is null
//                ')
//            ->queryAll();
        $query = District::withAdoptionAnimals();

        return $query;
    }

    public function actionWithfoundanimals(){
//        $query = Yii::$app->db
//            ->createCommand
//            ('
//                    SELECT distinct d.id, d.name
//                    FROM districts d
//                        INNER JOIN address a ON a.district_id = d.id
//                        INNER JOIN organizations o ON o.address_id = a.id
//                        INNER JOIN adoption_animals aa ON aa.organization_id = o.id
//                        LEFT JOIN adoptions ad ON ad.adopted_animal_id = aa.id
//                    WHERE aa.is_on_fat is not null and ad.id is null
//                ')
//            ->queryAll();
        $query = District::withFoundAnimals();

        return $query;
    }

    public function actionWithmissinganimals(){
//        $query = Yii::$app->db
//            ->createCommand
//            ('
//                    SELECT distinct d.id, d.name
//                    FROM districts d
//                        INNER JOIN address a ON a.district_id = d.id
//                        INNER JOIN organizations o ON o.address_id = a.id
//                        INNER JOIN adoption_animals aa ON aa.organization_id = o.id
//                        LEFT JOIN adoptions ad ON ad.adopted_animal_id = aa.id
//                    WHERE aa.is_on_fat is not null and ad.id is null
//                ')
//            ->queryAll();

        $query = District::withMissingAnimals();

        return $query;
    }




}

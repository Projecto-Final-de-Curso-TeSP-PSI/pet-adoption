<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\AdoptionAnimal;
use backend\modules\api\models\Animal;
use backend\modules\api\models\FoundAnimal;
use backend\modules\api\models\MissingAnimal;
use common\models\Photo;
use common\models\User;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;
use yii\web\BadRequestHttpException;
use yii\web\ForbiddenHttpException;
use backend\modules\api\utils\Utils;


class MissingAnimalController extends ActiveController
{
    public $modelClass = 'backend\modules\api\models\MissingAnimal';

    public function behaviors()
    {
        $behaviors =  parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::className(),
//            'class' => CompositeAuth::className(),
            'except' => ['index','view'],
            'auth' => [$this, 'auth'],
//            'authMethods' => [
//                HttpBasicAuth::className(),
//                HttpBearerAuth::className(),
//                QueryParamAuth::className(),
        ];

        return $behaviors;
    }

    public function auth($username, $password){
        $user = User::findByUsername($username);
        if($user && $user->validatePassword($password)){
            return $user;
        }
    }

    /**
     * @param string $action
     * @param null $model
     * @param array $params
     * @throws ForbiddenHttpException
     */
    public function checkAccess($action, $model = null, $params = []){

//        var_dump($params);
//        die;
//
//        if($action === 'update' && !Yii::$app->user->can('updateOwnMissingAnimal', ['missingAnimal' => $model])){
//            throw new ForbiddenHttpException("Não tem permissão para alterar este registo");
//        }
//
//        if($action === 'delete' && !Yii::$app->user->can('deletePost', ['missingAnimal' => $model])){
//            throw new ForbiddenHttpException("Não tem permissão para apagar este registo");
//        }

    }

    public function actions(){
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);
        return $actions;
    }

    public function actionCreate(){

        $request = Yii::$app->request;

        if ($request->post() == null)
            return new BadRequestHttpException("Body data not sent");

        $post = $request->post();
        $animal = Utils::createAnimal($post, 'missingAnimal');
        return $animal;
    }

    public function actionUpdate($id){

        $request = Yii::$app->request;

        if ($request->post() == null)
            return new BadRequestHttpException("Body data not sent");

        $post = $request->post();
        $animal = Utils::updateAnimal($id, $post, 'missingAnimal');
        return $animal;
    }

    public function actionDelete($id){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {
            $animal = Animal::findOne($id);
            if($animal == null )
                throw new BadRequestHttpException("Animal is required");

            //delete all photos of this animal
            Photo::deleteAll(['id_animal' => $animal->id]);

            //delete child animal
            switch($animal->getType()){
                case 'adoptionAnimal':
                    AdoptionAnimal::findOne($id)->delete();
                    break;
                case 'missingAnimal':
                    MissingAnimal::findOne($id)->delete();
                    break;
                case 'foundAnimal':
                    FoundAnimal::findOne($id)->delete();
                    break;
            }

            //delete the animal
            $ret = $animal->delete();

            $transaction->commit();
        } catch (\Exception $e) {
            $transaction->rollBack();
            return $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            return $e;
        }

        return ['DelError' => $ret];
    }
}

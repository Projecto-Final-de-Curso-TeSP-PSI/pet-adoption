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

    public function behaviors()
    {
        //TODO: Falta aplicar o RBAC

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

    public function actions(){
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);
        return $actions;
    }

    public function verbs()

    {

        $verbs = parent::verbs();

        $verbs[ "upload" ] = ['POST' ];

        return $verbs;

    }


//    public function actionUpload()
//    {
//        $documentPath = realpath(Yii::$app->basePath . '/../frontend/web/images/animal') . '\\';
//
//        $postdata = fopen( $_FILES[ 'photo' ][ 'tmp_name' ], "r" );
//
//        /* Get file extension */
//
//        $extension = substr( $_FILES[ 'photo' ][ 'name' ], strrpos( $_FILES[ 'photo' ][ 'name' ], '.' ) );
//
//
//        /* Generate unique name */
//
//        $uniqueId = uniqid() . $extension;
//
//        $filename = $documentPath . $uniqueId;
//
//
//        /* Open a file for writing */
//
//        $fp = fopen( $filename, "w" );
//
//
//        /* Read the data 1 KB at a time
//
//          and write to the file */
//
//        while( $data = fread( $postdata, 1024 ) )
//
//            fwrite( $fp, $data );
//
//
//        /* Close the streams */
//
//        fclose( $fp );
//
//        fclose( $postdata );
//
//
//        return $uniqueId;
//    }

    public function actionCreate(){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {
            $request = Yii::$app->request;
            if($request->post() !== null){

                $body = $request->post();
//                var_dump($body); die;

                //$animal->load(Yii::$app->request->post());
                $animal = new \backend\modules\api\models\Animal();
                $animal->name = $body['name'];
                $animal->chipId = $body['chipId'];
                $animal->description = $body['description'];
                $animal->nature_id = $body['nature_id'];
                $animal->fur_length_id = $body['fur_length_id'];
                $animal->fur_color_id = $body['fur_color_id'];
                $animal->size_id = $body['size_id'];
                $animal->sex = $body['sex'];
                $animal->save();

//                $photo = new Photo();
//                $photo->id_animal = $animal->id;
//                $photo->caption = $animal->nature->name . " - " . $animal->name;
//                $photo->imgPath = 'images/animal/' . $this->actionUpload();
//                $photo->save();

                switch($body['animal_type']) {
                    case 'missingAnimal':
                        $missingAnimal = new MissingAnimal();
                        $missingAnimal->id = $animal->id;
                        $missingAnimal->is_missing = true;
                        $missingAnimal->missing_date = $body['missing_date'];
                        $missingAnimal->owner_id = Yii::$app->user->id;
                        $missingAnimal->save();
                        break;
                    case 'foundAnimal':
                        $address = new Address();
                        $address->street = $body['street'];
                        $address->city = $body['city'];
                        $address->district_id = District::getId($body['district']);
                        $address->save();

                        $foundAnimal = new FoundAnimal();
                        $foundAnimal->id = $animal->id;
                        $foundAnimal->location = $address->id;
                        $foundAnimal->is_active = true;
                        $foundAnimal->found_date = $body['found_date'];
                        $foundAnimal->priority = 'Por classificar';
                        $foundAnimal->user_id = Yii::$app->user->id;
                        $foundAnimal->save();
                        break;
                }
            }
            $transaction->commit();
        } catch (\Exception $e) {
            $transaction->rollBack();
            return $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            return $e;
        }

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return ['message' => $animal, 'code' => 201];
    }

    public function actionUpdate($id){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {

            $request = Yii::$app->request;
            if($request->post() !== null){

                $body = $request->post();

                //$animal = new \backend\modules\api\models\Animal();
                $animal =  Animal::findone($id);

                if(!$animal)
                    throw new NotFoundHttpException('Animal not found');

                $animal->name = $body['name'];
                $animal->chipId = $body['chipId'];
                $animal->description = $body['description'];
                $animal->nature_id = Nature::getId($body['nature']);
                $animal->fur_length_id = FurLength::getId($body['fur_length']);
                $animal->fur_color_id = FurColor::getId($body['fur_color']);
                $animal->size_id = Size::getId($body['size']);
                $animal->sex = $body['sex'];

                $animal->save();

//                //TODO: fazer upload da foto $body->photo
//                $photo = new Photo();
//                $photo->id_animal = $animal->id;
//                $photo->caption = $animal->nature->name . " - " . $animal->name;
//
//                $photo->imgPath = UploadedFile::getInstance($body, 'photo');
//                if($photo->imgPath){
//                    $photo->imgPath->saveAs('@frontend/web/images/animal/' . $animal->name . '_' . $animal->id . '.' . $file->extension);
//                    $photo->imgPath = 'images/animal/' . $animal->name . '_' . $animal->id . '.' . $file->extension;
//                }
//
//                if($photo->save()) {
//                    echo json_encode(array('status'=>"Success",
//                        'data'=>$photo->attributes),JSON_PRETTY_PRINT);
//                } else {
//                    echo json_encode(array('status'=>"Failure",
//                        'error_code'=>400,
//                        'errors'=>$photo->errors),JSON_PRETTY_PRINT);
//                }

                switch($body['animal_type']) {
                    case 'missingAnimal':
                        //$missingAnimal = new MissingAnimal();

                        $missingAnimal = MissingAnimal::findOne($id);
                        if(!$missingAnimal)
                            throw new \Exception("Animal id not found");

                        $missingAnimal->id = $animal->id;
                        $missingAnimal->is_missing = true;
                        $missingAnimal->missing_date = $body['missing_date'];
                        $missingAnimal->owner_id = Yii::$app->user->id;
                        $missingAnimal->save();
                        break;
                    case 'foundAnimal':
                        $address = new Address();
                        //TODO: find address by street and city
                        $address->street = $body['street'];
                        $address->city = $body['city'];
                        $address->district_id = District::getId($body['district']);
                        $address->save();

                        //$foundAnimal = new FoundAnimal();
                        $foundAnimal = FoundAnimal::findOne($id);
                        if(!$foundAnimal)
                            throw new \Exception("Animal id not found");

                        $foundAnimal->id = $animal->id;
                        $foundAnimal->location = $address->id;
                        $foundAnimal->is_active = true;
                        $foundAnimal->found_date = $body['found_date'];
                        $foundAnimal->priority = 'Por classificar';
                        $foundAnimal->user_id = Yii::$app->user->id;
                        $foundAnimal->save();
                        break;
                }
            }
            $transaction->commit();
        } catch (\Exception $e) {
            $transaction->rollBack();
            return $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            return $e;
        }
    }


    public function actionDelete($id){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {
            $animal = Animal::findone($id);
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

        return true;
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

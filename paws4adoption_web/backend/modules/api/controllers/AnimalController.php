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
use SebastianBergmann\Diff\Output\DiffOnlyOutputBuilder;
use Symfony\Component\Yaml\Tests\A;
use Yii;
use yii\db\Exception;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

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

    public function actionCreate(){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {

            $request = Yii::$app->request;
            if($request->post() !== null){

                $body = $request->post();

                //$animal->load(Yii::$app->request->post());
                $animal = new \backend\modules\api\models\Animal();
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
//                if($photo->imgPath) {
//
//                    $photo->imgPath->saveAs('@frontend/web/images/animal/' . $animal->name . '_' . $animal->id . '.' . $file->extension);
//                    $photo->imgPath = 'images/animal/' . $animal->name . '_' . $animal->id . '.' . $file->extension;
//
//                    if ($photo->save()) {
//                        echo json_encode(array('status' => "Success",
//                            'data' => $photo->attributes), JSON_PRETTY_PRINT);
//                    } else {
//                        echo json_encode(array('status' => "Failure",
//                            'error_code' => 400,
//                            'errors' => $photo->errors), JSON_PRETTY_PRINT);
//                    }
//                }

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
                    throw new \Exception("Animal id not found");

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
            $childAnimal = null;
            switch($animal->getType()){
                case 'adoptionAnimal':
                    $childAnimal = AdoptionAnimal::findOne($id)->delete();
                    break;
                case 'missingAnimal':
                    $childAnimal = MissingAnimal::findOne($id)->delete();
                    break;
                case 'foundAnimal':
                    $childAnimal = FoundAnimal::findOne($id)->delete();
                    break;
            }

            //delete the animal
            $animal->delete();

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

//    public function actionMissinganimals($id = null){
//
//        try{
//            $result = [];
//
//            //If ana animal Id is passed as argument, returns that missing animal
//            $request = Yii::$app->request;
//            if($request->get() != null){
//
//                $result = \backend\modules\api\models\Animal::findOne($id);
//
//                    if($result->getType() == 'missinAnimal'){
//                        return json_encode($result);
//                    } else {
//                        throw new \yii\web\NotFoundHttpException("Não foinencontrado uma animal com o Id: " . $id);
//                    }
//
//
//
//
//            }
//
//            $animals = \backend\modules\api\models\Animal::find()
//                ->joinWith('missingAnimal')
//                //->where(['not', [id' => null]])
//                ->all();
//
////        foreach ($animals as $animal){
////            if($animal->getType() == 'missingAnimal'){
////                array_push($result, $animal);
////            }
////        }
//
//            //var_dump($animals);
//            //var_dump($result);
//            var_dump(json_encode($animals));
//            die;
//
//
//            return json_encode($result);
//
//        }
//        catch(NotFoundHttpException $e){
//            return $e;
//        }
//        catch(Exception $e){
//            return $e;
//        }
//
//    }

//    public $documentPath = 'documents/';
//
//    public function verbs()
//    {
//        $verbs = parent::verbs();
//        $verbs[ "upload" ] = ['POST' ];
//        return $verbs;
//    }
//
//    public function actionUpload()
//    {
//        $postdata = fopen( $_FILES[ 'data' ][ 'tmp_name' ], "r" );
//        /* Get file extension */
//        $extension = substr( $_FILES[ 'data' ][ 'name' ], strrpos( $_FILES[ 'data' ][ 'name' ], '.' ) );
//
//        /* Generate unique name */
//        $filename = $this->documentPath . uniqid() . $extension;
//
//        /* Open a file for writing */
//        $fp = fopen( $filename, "w" );
//
//        /* Read the data 1 KB at a time
//          and write to the file */
//        while( $data = fread( $postdata, 1024 ) )
//            fwrite( $fp, $data );
//
//        /* Close the streams */
//        fclose( $fp );
//        fclose( $postdata );
//
//        /* the result object that is sent to client*/
//        $result = new UploadResult;
//        $result->filename = $filename;
//        $result->document = $_FILES[ 'data' ][ 'name' ];
//        $result->create_time = date( "Y-m-d H:i:s" );
//        return $result;
//    }


}

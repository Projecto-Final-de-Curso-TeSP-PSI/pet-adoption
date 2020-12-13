<?php

namespace backend\modules\api\utils;

use backend\modules\api\models\Address;
use backend\modules\api\models\AdoptionAnimal;
use backend\modules\api\models\Animal;
use backend\modules\api\models\FoundAnimal;
use backend\modules\api\models\MissingAnimal;
use common\models\Photo;
use Yii;
use yii\web\BadRequestHttpException;

class Utils
{
    public static function createAnimal($body, $animal_type){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try
        {
            $animal = new \backend\modules\api\models\Animal();
            $animal->name = $body['name'];
            $animal->chipId = $body['chipId'];
            $animal->description = $body['description'];
            $animal->nature_id = $body['nature_id'];
            $animal->fur_length_id = $body['fur_length_id'];
            $animal->fur_color_id = $body['fur_color_id'];
            $animal->size_id = $body['size_id'];
            $animal->sex = $body['sex'];
            $saveOk = $animal->save();

            $savePhotoOk = self::createPhoto($animal);

            switch($animal_type) {
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
                    $address->district_id = $body['district'];
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
            $transaction->commit();

        } catch (\Exception $e) {
            $transaction->rollBack();
//            var_dump($e); die;

            return new BadRequestHttpException();
        } catch (\Throwable $e) {
            $transaction->rollBack();
//            var_dump($e); die;

            return $e;
        }
    }

    public static function updateAnimal($id, $body, $animal_type){

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try
        {
            $animal =  Animal::findOne($id);
            if($animal == null)
                throw new \Exception("Animal id not found");

            $animal->name = $body['name'];
            $animal->chipId = $body['chipId'];
            $animal->description = $body['description'];
            $animal->nature_id = $body['nature_id'];
            $animal->fur_length_id = $body['fur_length_id'];
            $animal->fur_color_id = $body['fur_color_id'];
            $animal->size_id = $body['size_id'];
            $animal->sex = $body['sex'];

//            if(!$animal->save()){
//                throw new InvalidArgumentException("Erro ao gravar os dados");
//            }



            switch($animal_type) {
                case "missingAnimal":


//                    if(!$missingAnimal)
//                        throw new \BadRequestHttpException("Animal not found");



                    $animal->missingAnimal->is_missing = $body['is_missing'];
                    $animal->missingAnimal->missing_date = $body['missing_date'];
                    //$animal->missingAnimal->owner_id = Yii::$app->user->id;
                    $animal->save();

//                    var_dump($animal);
//                    die;

                    break;
                case 'foundAnimal':
                    $address = Address::findOne($body['location']);
                    if($address == null)
                        $address = new Address();

                    $address->street = $body['street'];
                    $address->city = $body['city'];
                    $address->district_id = $body['district'];
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

                $transaction->commit();

            } catch (\Exception $e) {
                $transaction->rollBack();
                return $e;
            } catch (\Throwable $e) {
                $transaction->rollBack();
                return $e;
            }

            return $animal;
    }

    public static function deleteAnimal($id){
        $animal = Animal::findOne($id);
        if($animal == null )
            throw new BadRequestHttpException("Animal not found");

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

        $animal->save();

        return $animal;
    }

    private static function createPhoto($animal){
        $photo = new Photo();
        $photo->id_animal = $animal->id;
        $photo->caption = $animal->nature->name . " - " . $animal->name;
        $photo->imgPath = 'images/animal/' . self::uploadPhoto();
        return $photo->save();
    }

    private static function uploadPhoto(){

        $documentPath = realpath(Yii::$app->basePath . '/../frontend/web/images/animal') . '\\';

        $postdata = fopen( $_FILES[ 'photo' ][ 'tmp_name' ], "r" );

        /* Get file extension */
        $extension = substr( $_FILES[ 'photo' ][ 'name' ], strrpos( $_FILES[ 'photo' ][ 'name' ], '.' ) );

        /* Generate unique name */
        $uniqueId = uniqid() . $extension;
        $filename = $documentPath . $uniqueId;

        /* Open a file for writing */
        $fp = fopen( $filename, "w" );

        /* Read the data 1 KB at a time and write to the file */
        while($data = fread($postdata, 1024)){
            fwrite( $fp, $data );
        }

        /* Close the streams */
        fclose( $fp );
        fclose( $postdata );

        /* returns the uniqueId of the file to be saved later in the database */
        return $uniqueId;
    }
}
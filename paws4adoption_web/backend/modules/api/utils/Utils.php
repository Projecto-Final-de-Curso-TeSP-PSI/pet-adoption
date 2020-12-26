<?php

namespace backend\modules\api\utils;

use backend\modules\api\exceptions\PhotoSaveException;
use backend\modules\api\exceptions\PhotoUploadException;
use backend\modules\api\exceptions\SaveAnimalException;

use backend\modules\api\models\Address;
use backend\modules\api\models\Animal;
use backend\modules\api\models\FoundAnimal;
use backend\modules\api\models\MissingAnimal;
use common\models\Photo;
use Yii;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;

class Utils
{
    public static function createAnimal($post, $animal_type){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try
        {
            $animal = new \backend\modules\api\models\Animal();

            $animal->name = $post['name'];
            $animal->chipId = $post['chipId'];
            $animal->description = $post['description'];
            $animal->nature_id = $post['nature_id'];
            $animal->fur_length_id = $post['fur_length_id'];
            $animal->fur_color_id = $post['fur_color_id'];
            $animal->size_id = $post['size_id'];
            $animal->sex = $post['sex'];

            if(!$animal->save())
                throw new BadRequestHttpException("Erro on saving animal");

//            if(!self::createPhoto($animal))
//                throw new BadRequestHttpException("Error on saving animal");

            switch($animal_type) {
                case 'missingAnimal':
                    $missingAnimal = new \backend\modules\api\models\MissingAnimal();
                    $missingAnimal->id = $animal->id;
                    $missingAnimal->is_missing = true;
                    $missingAnimal->missing_date = $post['missing_date'];
                    $missingAnimal->owner_id = Yii::$app->user->id;

                    if(!$missingAnimal->save())
                        throw new BadRequestHttpException("Error on saving missing animal");

                    break;
                case 'foundAnimal':
                    $address = new \backend\modules\api\models\Address();
                    $address->street = $post['street'];
                    $address->city = $post['city'];
                    $address->district_id = $post['district_id'];

                    if(!$address->save())
                        throw new BadRequestHttpException("Error on saving found address");

                    $foundAnimal = new \backend\modules\api\models\FoundAnimal();
                    $foundAnimal->id = $animal->id;
                    $foundAnimal->location_id = $address->id;
                    $foundAnimal->is_active = true;
                    $foundAnimal->found_date = $post['found_date'];
                    $foundAnimal->priority = 'Por classificar';
                    $foundAnimal->user_id = Yii::$app->user->id;

                    if(!$foundAnimal->save())
                        throw new BadRequestHttpException("Error on saving found animal");

                    break;
            }

            $transaction->commit();
        } catch (BadRequestHttpException $e){
            $transaction->rollBack();
            throw $e;
        } catch (PhotoUploadException $e){
            $transaction->rollBack();
            throw  $e;
        } catch(PhotoSaveException $e){
            $transaction->rollBack();
            throw $e;
        }catch (\Exception $e) {
            $transaction->rollBack();
            throw new SaveAnimalException("Error on saving animal on the database", null, $e);
        }

        //return $animal_type == 'foundAnimal' ? $foundAnimal : $missingAnimal;
        return $animal;
    }

    public static function updateAnimal($id, $post, $animal_type){

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try
        {

            var_dump($post); die;

            $animal =  Animal::findOne($id);
            if($animal == null)
                throw new NotFoundHttpException("Animal parent id not found");

            $animal->name = $post['name'];
            $animal->chipId = $post['chipId'];
            $animal->description = $post['description'];
            $animal->nature_id = $post['nature_id'];
            $animal->fur_length_id = $post['fur_length_id'];
            $animal->fur_color_id = $post['fur_color_id'];
            $animal->size_id = $post['size_id'];
            $animal->sex = $post['sex'];

            if(!$animal->save())
                throw new BadRequestHttpException("Erro on saving animal");

//            if(!self::updatePhoto($animal))
//                throw new BadRequestHttpException("Error on saving photo");

            switch($animal_type) {
                case "missingAnimal":
                    $missingAnimal = MissingAnimal::findOne($id);

                    //$missingAnimal->is_missing = $post['is_missing'];
                    $missingAnimal->missing_date = $post['missing_date'];

                    if(!$missingAnimal->save())
                        throw new BadRequestHttpException("Error on saving missing animal");

                    break;
                case 'foundAnimal':
                    $foundAnimal = FoundAnimal::findOne($animal->id);
                    if($foundAnimal == null)
                        throw new BadRequestHttpException("Error on indexing found animal");

                    $address = Address::findOne($foundAnimal->location_id);
                    if($address == null)
                        throw new BadRequestHttpException("Error on indexing found animal address");


                    $address->street = $post['street'];
                    $address->city = $post['city'];
                    $address->district_id = $post['district_id'];
                    if(!$address->save())
                        throw new BadRequestHttpException("Error on saving found address");

                    $foundAnimal->is_active = true;
                    $foundAnimal->found_date = $post['found_date'];
                    $foundAnimal->priority = $post['priority'];
                    if(!$foundAnimal->save())
                        throw new BadRequestHttpException("Error on saving found animal");

                    break;
            }

            $transaction->commit();
        } catch (BadRequestHttpException $e){
            $transaction->rollBack();
            throw $e;
        } catch(NotFoundHttpException $e){
            $transaction->rollBack();
            throw $e;
        } catch (PhotoUploadException $e){
            $transaction->rollBack();
            throw  $e;
        } catch(PhotoSaveException $e){
            $transaction->rollBack();
            throw $e;
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw new SaveAnimalException("Error on saving animal on the database", null, $e);
        }

        //return $animal_type == 'foundAnimal' ? $foundAnimal : $missingAnimal;
        return Animal::findOne($animal->id);
    }

//    public static function deleteAnimal($animal, $animal_type){
//        $db = Yii::$app->db;
//        $transaction = $db->beginTransaction();
//        try {
//
//
//
//
//            $animal = Animal::findOne($id);
//            if($animal == null )
//                throw new NotFoundHttpException("Animal not found: " . $animal_type);
//
//            //delete all photos of this animal
//            Photo::deleteAll(['id_animal' => $animal->id]);
//
//            //delete child animal
//            switch($animal_type){
//                case 'missingAnimal':
//                    MissingAnimal::findOne($id)->delete();
//                    break;
//                case 'foundAnimal':
//                    FoundAnimal::findOne($id)->delete();
//                    break;
//            }
//            $animal->delete();
//
//            $transaction->commit();
//        } catch(NotFoundHttpException $e){
//            throw $e;
//        } catch (\Exception $e) {
//            $transaction->rollBack();
//            throw new SaveAnimalException("Error on deletin animal on the database", 400, $e);
//        }
//        return $animal;
//    }

    private static function createPhoto($animal){

        $saveResult = null;
        try {
            $photo = new Photo();
            $photo->caption = $animal->nature->name . " - " . $animal->name;

            $result = self::uploadPhoto(uniqid());

            if($result['saved'] == true){
                $photo->name = $result['name'];
                $photo->extension = $result['extension'];
            }
            else{
                return false;
            }

            $photo->id_animal = $animal->id;


            $result = $photo->save();

        } catch (PhotoUploadException $e){
            throw  $e;
        } catch(\Exception $e){
            throw new PhotoSaveException("Error on saving photo on the database");
        }

        return $result;
    }

    private static function updatePhoto($animal){
        $saveResult = null;
        try {


            $result = self::uploadPhoto($animal->photo->name);

            if($result['saved'] == true){
                $animal->photo->extension = $result['extension'];
            }
            else{
                return false;
            }

            $result = $animal->save();
        } catch (PhotoUploadException $e){
            throw  $e;
        } catch(\Exception $e){
            throw new PhotoSaveException("Error on saving photo on the database", 400);
        }
        return $saveResult;
    }

    private static function uploadPhoto($uniqueId){
        try {

            $path = realpath(Yii::$app->basePath . '/../frontend/web/images/animal') . '\\';

            $postdata = fopen($_FILES['photo']['tmp_name'], "r");


            /* Get file extension */
            $extension = substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'], '.'));

            /* Generate unique name */
            $filename = $uniqueId . $extension;
            $documentPath = $path . $filename;

            /* Open a file for writing */
            $fp = fopen($documentPath, "w");

            /* Read the data 1 KB at a time and write to the file */
            while ($data = fread($postdata, 1024)) {
                fwrite($fp, $data);
            }

            /* Close the streams */
            fclose($fp);
            fclose($postdata);
        }
        catch (\Exception $e){
            throw  new PhotoUploadException("Error on uploading photo", null, $e);
        }

        /* returns an array e */
        return [
            'saved' => true,
            'name' => $uniqueId,
            'extension' => $extension
        ];
    }
}
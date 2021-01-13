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
    /**
     * Creates one animal type on the database, as chosen by parameter
     * @param $post
     * @param $animal_type
     * @return Animal
     * @throws BadRequestHttpException
     * @throws PhotoSaveException
     * @throws PhotoUploadException
     * @throws SaveAnimalException
     */
    public static function createAnimal($post, $animal_type){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try
        {
            $animal = new \backend\modules\api\models\Animal();

            $animal->name = isset($post['name']) ? $post['name'] : null;
            $animal->chipId = isset($post['chipId']) ? $post['chipId'] : null;
            $animal->description = $post['description'];
            $animal->nature_id = $post['nature_id'];
            $animal->fur_length_id = $post['fur_length_id'];
            $animal->fur_color_id = $post['fur_color_id'];
            $animal->size_id = $post['size_id'];
            $animal->sex = $post['sex'];


            if(!$animal->save())
                throw new BadRequestHttpException("Erro on saving animal");

            if (isset($post['photo'])){
                if(!self::createPhoto($animal, $post['photo']))
                    throw new BadRequestHttpException("Error on saving animal");
            }


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
                    //$foundAnimal->priority = 'Por classificar';
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

        return $animal;
    }

    /**
     * Updates one animal type on the database, as chosen by parameter
     * @param $id
     * @param $post
     * @param $animal_type
     * @return Animal
     * @throws BadRequestHttpException
     * @throws NotFoundHttpException
     * @throws PhotoSaveException
     * @throws PhotoUploadException
     * @throws SaveAnimalException
     */
    public static function updateAnimal($id, $post, $animal_type){

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try
        {

            $animal =  \backend\modules\api\models\Animal::findOne($id);
            if($animal == null)
                throw new NotFoundHttpException("Animal parent id not found");

            $animal->name = isset($post['name']) ? $post['name'] : null;
            $animal->chipId = isset($post['chipId']) ? $post['chipId'] : null;
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
                    //$foundAnimal->priority = $post['priority'];
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

        return Animal::findOne($animal->id);
    }

    /**
     * Creates one photo on the server public assets and database
     * @param $animal
     * @return array|bool
     * @throws PhotoSaveException
     * @throws PhotoUploadException
     */
    private static function createPhoto($animal, $photoBase64){

        $saveResult = null;
        try {
            $photo = new Photo();
            $photo->caption = $animal->nature->name . " - " . $animal->name;

            $result = self::uploadPhoto(uniqid(), $photoBase64);

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

    /**
     * Updates onhe photo on the server public assets and database
     * @param $animal
     * @return bool|null
     * @throws PhotoSaveException
     * @throws PhotoUploadException
     */
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

    /**
     * Uploads one photo to the server
     * @param $uniqueId
     * @return array
     * @throws PhotoUploadException
     */
    private static function uploadPhoto($uniqueId, $photoBase64){
        try {

            $path = realpath(Yii::$app->basePath . '/../frontend/web/images/animal') . '\\';

//            $postdata = fopen($_FILES['photo']['tmp_name'], "r");



            /* Get file extension */
//            $extension = substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'], '.'));
            $extension = 'bmp';

            /* Generate unique name */
            $filename = $uniqueId .'.'. $extension;
            $documentPath = $path . $filename;

            file_put_contents($documentPath, base64_decode($photoBase64));

//            /* Open a file for writing */
//            $fp = fopen($documentPath, "w");
//
//            /* Read the data 1 KB at a time and write to the file */
//            while ($data = fread($postdata, 1024)) {
//                fwrite($fp, $data);
//            }
//
//            /* Close the streams */
//            fclose($fp);
//            fclose($postdata);
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
<?php


namespace backend\modules\api\controllers;


use backend\modules\api\models\Photo;

class PhotosController extends \yii\rest\ActiveController
{
    public $modelClass = Photo::class;
}
<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FoundAnimal */
/* @var $animalModel common\models\Animal */
/* @var $addressModel common\models\Address */
/* @var $newAnimalPhotoModel common\models\Photo */
/* @var $natureList */
/* @var $natureDog */
/* @var $natureCat */
/* @var $fulLength */
/* @var $fulColor */
/* @var $size */
/* @var $sex */
/* @var $priority */

AppAsset::register($this);

$typeUpdate = 'updateFoundAnimal';
?>
<div class="found-animal-update">
    <div class="container">
        <?= $this->render('../components/_updateAnimalForm', [
            'typeUpdate' => $typeUpdate,
            'addressModel' => $addressModel,
            'animalModel' => $animalModel,
            'newAnimalPhotoModel' => $newAnimalPhotoModel,
            'foundAnimalModel' => $model,
            'natureList' => $natureList,
            'natureDog' => $natureDog,
            'natureCat' => $natureCat,
            'fulLength' => $fulLength,
            'fulColor' => $fulColor,
            'size' => $size,
            'sex' => $sex,
            'priority' => $priority,
        ]) ?>
    </div>
</div>

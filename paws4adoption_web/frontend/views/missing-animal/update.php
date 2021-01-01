<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MissingAnimal */
/* @var $animalModel common\models\Animal */
/* @var $newAnimalPhotoModel common\models\Photo */
/* @var $natureList */
/* @var $natureDog */
/* @var $natureCat */
/* @var $fulLength */
/* @var $fulColor */
/* @var $size */
/* @var $sex */

AppAsset::register($this);

$typeUpdate = 'updateMissingAnimal';
?>
<div class="missing-animal-update">
    <div class="container">
        <?= $this->render('../components/_updateAnimalForm', [
            'typeUpdate' => $typeUpdate,
            'animalModel' => $animalModel,
            'missingAnimalModel' => $model,
            'newAnimalPhotoModel' => $newAnimalPhotoModel,
            'natureList' => $natureList,
            'natureDog' => $natureDog,
            'natureCat' => $natureCat,
            'fulLength' => $fulLength,
            'fulColor' => $fulColor,
            'size' => $size,
            'sex' => $sex,
        ]) ?>
    </div>
</div>


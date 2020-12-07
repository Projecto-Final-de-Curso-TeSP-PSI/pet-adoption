<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $animalModel common\models\Animal */
/* @var $missingAnimalModel common\models\MissingAnimal */
/* @var $animalPhotoModel common\models\Photo */
/* @var $natureList */
/* @var $natureDog */
/* @var $natureCat */
/* @var $fulLength */
/* @var $fulColor */
/* @var $size */
/* @var $sex */
/* @var $priority */


AppAsset::register($this);
$typeCreate = 'createMissingAnimal'
?>
<div class="container">
    <?= $this->render('../components/_PublishForm', [
        'typeCreate' => $typeCreate,
        'animalModel' => $animalModel,
        'missingAnimalModel' => $missingAnimalModel,
        'animalPhotoModel' => $animalPhotoModel,
        'natureList' => $natureList,
        'natureDog' => $natureDog,
        'natureCat' => $natureCat,
        'fulLength' => $fulLength,
        'fulColor' => $fulColor,
        'size' => $size,
        'sex' => $sex,
    ]) ?>
</div>


<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $animalModel common\models\Animal */
/* @var $missingAnimalModel common\models\MissingAnimal */
/* @var $natureList */
/* @var $natureDog */
/* @var $natureCat */
/* @var $fulLength */
/* @var $fulColor */
/* @var $size */
/* @var $sex */


$this->title = 'Publicar Animal Desaparcido';
AppAsset::register($this);
?>

<div class="missing-animal-create">
    <?= $this->render('_form', [
        'animalModel' => $animalModel,
        'missingAnimalModel' => $missingAnimalModel,
        'natureList' => $natureList,
        'natureDog' => $natureDog,
        'natureCat' => $natureCat,
        'fulLength' => $fulLength,
        'fulColor' => $fulColor,
        'size' => $size,
        'sex' => $sex
    ]) ?>
</div>


<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FoundAnimal */
/* @var $animalModel common\models\Animal */
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
<div class="found-animal-update">
    <div class="container">
        <?= $this->render('../components/_updateAnimalForm', [
            'typeUpdate' => $typeUpdate,
            'animalModel' => $animalModel,
            'missingAnimalModel' => $model,
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


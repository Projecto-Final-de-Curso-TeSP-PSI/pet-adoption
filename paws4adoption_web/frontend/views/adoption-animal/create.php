<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $animalModel common\models\AdoptionAnimal */
/* @var $adoptionAnimalModel common\models\AdoptionAnimal */
/* @var $animalPhotoModel common\models\Photo */
/* @var $natureList */
/* @var $natureDog */
/* @var $natureCat */
/* @var $fulLength */
/* @var $fulColor */
/* @var $size */
/* @var $sex */
/* @var $organizationName */

AppAsset::register($this);
$typeCreate = 'createAdoptionAnimal'
?>
<div class="container">
    <?= $this->render('../components/_PublishForm', [
        'typeCreate' => $typeCreate,
        'animalModel' => $animalModel,
        'adoptionAnimalModel' => $adoptionAnimalModel,
        'animalPhotoModel' => $animalPhotoModel,
        'natureList' => $natureList,
        'natureDog' => $natureDog,
        'natureCat' => $natureCat,
        'fulLength' => $fulLength,
        'fulColor' => $fulColor,
        'size' => $size,
        'sex' => $sex,
        'organizationName' => $organizationName
    ]) ?>
</div>

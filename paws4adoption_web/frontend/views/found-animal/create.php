<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $addressModel common\models\Address */
/* @var $animalModel common\models\Animal */
/* @var $foundAnimalModel common\models\FoundAnimal */
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

$typeCreate = 'createFoundAnimal';
?>
<div class="container">
    <?= $this->render('../components/_PublishForm', [
        'typeCreate' => $typeCreate,
        'addressModel' => $addressModel,
        'animalModel' => $animalModel,
        'foundAnimalModel' => $foundAnimalModel,
        'animalPhotoModel' => $animalPhotoModel,
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

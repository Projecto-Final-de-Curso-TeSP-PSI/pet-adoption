<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $adoptionModel common\models\Adoption */
/* @var $adopter */
/* @var $adopterAddress */
/* @var $title */


AppAsset::register($this);

?>
<div class="container">
    <?= $this->render('_form', [
        'adoptionModel' => $adoptionModel,
        'title' => $title,
        'adopter' => $adopter,
    ]) ?>
</div>

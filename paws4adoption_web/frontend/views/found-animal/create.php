<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FoundAnimal */

$this->title = 'Create Found Animal';
$this->params['breadcrumbs'][] = ['label' => 'Found Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="main-content-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Paws4Adoption</a>
        </li>
        <li class="breadcrumb-item active">
            <span class="active">Publicar Animal Errante</span>
        </li>
    </ol>
</div>

<div class="found-animal-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>

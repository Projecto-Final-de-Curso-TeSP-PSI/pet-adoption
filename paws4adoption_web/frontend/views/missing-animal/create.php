<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MissingAnimal */

$this->title = 'Publicar Animal Desaparcido';
$this->params['breadcrumbs'][] = ['label' => 'Missing Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);
?>

<!-- Main Content Header -->
<div class="main-content-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Paws4Adoption</a>
        </li>
        <li class="breadcrumb-item active">
            <span class="active">Publicar Animal Desaparcido</span>
        </li>
    </ol>
</div>
<!-- End Main Content Header -->
<!-- End Main Content Header -->
<div class="missing-animal-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>


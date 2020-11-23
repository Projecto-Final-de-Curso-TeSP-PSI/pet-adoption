<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Organization */

$this->title = 'Associar Associação';
$this->params['breadcrumbs'][] = ['label' => 'Organizations', 'url' => ['index']];
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
            <span class="active">Associar Associação</span>
        </li>
    </ol>
</div>
<!-- End Main Content Header -->
<!-- End Main Content Header -->
<div class="organization-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>











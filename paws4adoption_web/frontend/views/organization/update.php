<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $organization common\models\Organization */
/* @var $address common\models\Address */
/* @var string $scenario */
/* @var string $scenario */

AppAsset::register($this);

?>
<div class="organization-update">

    <!-- Main Content Header -->
    <div class="main-content-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Paws4Adoption</a>
            </li>
            <li class="breadcrumb-item active">
                <span class="active">Atualizar Associação</span>
            </li>
        </ol>
    </div>
    <!-- End Main Content Header -->


    <h1><?= Html::encode($this->title) ?></h1>


    <div class="organization-create">
        <?= $this->render('_form', [
            'organization' => $organization,
            'address' => $address,
        ]) ?>

    </div>



</div>



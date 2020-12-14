<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $newOrganization common\models\Organization */
/* @var $newAddress common\models\Address */

AppAsset::register($this);
?>
<!-- Main Content Header -->
<div class="main-content-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Paws4Adoption</a>
        </li>
        <li class="breadcrumb-item active">
            <span class="active">Registar Associação</span>
        </li>
    </ol>
</div>
<!-- End Main Content Header -->

<div class="organization-create">
    <?= $this->render('_form', [
        'organization' => $organization,
        'address' => $address,
    ]) ?>

</div>











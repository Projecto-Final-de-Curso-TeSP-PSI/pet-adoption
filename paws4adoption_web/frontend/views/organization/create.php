<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $organization common\models\Organization */
/* @var $address common\models\Address */

AppAsset::register($this);
?>

<div class="organization-create">
    <?= $this->render('_form', [
        'organization' => $organization,
        'address' => $address,
        'scenario' => \common\models\Organization::SCENARIO_CREATE_ORGANIZATION,
    ]) ?>

</div>











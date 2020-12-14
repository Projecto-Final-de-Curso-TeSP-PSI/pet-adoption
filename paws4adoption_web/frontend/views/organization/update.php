<?php

use common\models\Organization;
use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $organization common\models\Organization */
/* @var $address common\models\Address */
/* @var string $scenario */
/* @var string $scenario */

AppAsset::register($this);

print_r(isset($error_message) ? $error_message : "nao veio");
?>
<div class="organization-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="organization-create">
        <?= $this->render('_form', [
            'organization' => $organization,
            'address' => $address,
            'scenario' => Organization::SCENARIO_UPDATE_ORGANIZATION
        ]) ?>

    </div>



</div>



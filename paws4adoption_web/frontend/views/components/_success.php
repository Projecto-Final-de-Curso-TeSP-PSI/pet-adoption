<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $title */
/* @var $description */
/* @var $btnText */

AppAsset::register($this);
?>

<div class="page-wrapper">
    <div class="error-content">
        <div class="d-table">
            <div class="d-tablecell">
                <i data-feather="send" class="icon"></i>
                <h1><?= $title ?></h1>
                <h4><?= $description ?></h4>


                <?= Html::a($btnText, 'adoption-animal/', [
                'class' => 'btn btn-primary',
                'title' => 'Sucesso',
                ]); ?>
            </div>
        </div>
    </div>
</div>
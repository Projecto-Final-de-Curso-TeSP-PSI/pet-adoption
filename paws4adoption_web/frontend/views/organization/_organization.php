<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Organization */
/* @var $form yii\widgets\ActiveForm */

AppAsset::register($this);
?>

<div class="card text-center mb-30">
    <div class="header card-header">
        <?=Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);?>
    </div>
    <div class="card-body">
        <div class="card-title h5">
            <?=Html::encode($model->address->city);?>
        </div>
        <p class="card-text"><?=Html::label('Morada:') . " ". Html::encode($model->address->fullAddress);?></p>
        <button type="button" class="btn btn-primary">Ver Animais Adoção</button>
    </div>
    <div class="text-muted card-footer">
        <?=Html::label('Contacto:') . " " . Html::encode($model->phone);?>
    </div>
</div>







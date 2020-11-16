<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Organization */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container">
    <div class="row org-view">

        <?=Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);?>
        <br>
        <?=Html::label('Morada:') . " ". Html::encode($model->address->fullAddress);?>
        <br>
        <?=Html::label('Contacto:') . " " . Html::encode($model->phone);?>

    </div>
</div>



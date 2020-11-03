<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MissingAnimal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="missing-animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'missing_date')->textInput() ?>

    <?= $form->field($model, 'is_missing')->checkbox() ?>

    <?= $form->field($model, 'owner_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

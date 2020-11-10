<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdoptionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adoption-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'motivation') ?>

    <?= $form->field($model, 'adoption_date') ?>

    <?= $form->field($model, 'adopted_animal_id') ?>

    <?= $form->field($model, 'adopter_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SignupForm */
/* @var $form ActiveForm */
?>
<div class="signup">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'firstName') ?>
        <?= $form->field($model, 'lastName') ?>
        <?= $form->field($model, 'nif') ?>
        <?= $form->field($model, 'street') ?>
        <?= $form->field($model, 'doorNumber') ?>
        <?= $form->field($model, 'floor') ?>
        <?= $form->field($model, 'postalCode') ?>
        <?= $form->field($model, 'streetCode') ?>
        <?= $form->field($model, 'city') ?>
        <?= $form->field($model, 'municipality') ?>
        <?= $form->field($model, 'district') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- signup -->

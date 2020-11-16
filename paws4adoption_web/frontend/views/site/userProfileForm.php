<?php

use common\models\District;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProfileForm */
/* @var $form ActiveForm */

$this->title = 'Dados do Utilizador';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userProfileForm">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Preencha o formulário para actualizar os seus dados de utilizador.</p>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'firstName') ?>
        <?= $form->field($model, 'lastName') ?>
        <?= $form->field($model, 'nif') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'street') ?>
        <?= $form->field($model, 'door_number') ?>
        <?= $form->field($model, 'floor') ?>
        <?= $form->field($model, 'postal_code') ?>
        <?= $form->field($model, 'street_code') ?>
        <?= $form->field($model, 'city') ?>
        <?= $form->field($model, 'district_id')->dropDownList(District::getData(), ['prompt' => 'Escolha o Distrito']) ?>

        <div class="form-group">
            <?= Html::submitButton('Gravar Dados', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- userProfileForm -->

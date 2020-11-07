<?php

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

        <?= $form->field($model, 'firstName')->label('Nome') ?>
        <?= $form->field($model, 'lastName')->label('Apelido') ?>
<!--    <?//= $form->field($model, 'email') ?>-->
        <?= $form->field($model, 'phone')->label('Telefone') ?>
        <?= $form->field($model, 'street')->label('Rua') ?>
        <?= $form->field($model, 'door_number')->label('N.º da Porta')?>
        <?= $form->field($model, 'floor')->label('Andar') ?>
        <?= $form->field($model, 'postal_code')->label('Código Postal') ?>
        <?= $form->field($model, 'street_code')->label('Código de Rua') ?>
        <?= $form->field($model, 'city')->label('Localidade')?>
        <?= $form->field($model, 'district_id')->dropDownList(\common\models\District::getData()) ?>

        <div class="form-group">
            <?= Html::submitButton('Alterar Dados', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- userProfileForm -->

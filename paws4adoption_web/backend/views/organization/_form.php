<?php

use common\models\District;
use common\models\Organization;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Organization */
/* @var $form yii\widgets\ActiveForm */

$address = $model->address;
$founder = $model->founder;
?>

<div class="organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(Organization::getStatuses('user'), ['prompt' => 'Escolha o estado'])?>

    <?= $form->field($address, 'street')->textInput() ?>

    <?= $form->field($address, 'door_number')->textInput() ?>

    <?= $form->field($address, 'floor')->textInput() ?>

    <?= $form->field($address, 'postal_code')->textInput() ?>

    <?= $form->field($address, 'street_code')->textInput() ?>

    <?= $form->field($address, 'city')->textInput() ?>

    <?= $form->field($address, 'district_id')->dropDownList(District::getData(), ['prompt' => 'Escolha o Distrito']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

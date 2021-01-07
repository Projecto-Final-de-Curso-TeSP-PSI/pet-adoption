<?php

use common\models\District;
use common\models\Organization;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AssociatedUserRequest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="associated-user-request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'candidate_id')->hiddenInput()->label(false); ?>

    <?= $form->field($model->candidate, 'fullName')->textInput(['readonly' => true]) ?>

    <?= $form->field($model->candidate, 'phone')->textInput(['readonly' => true]) ?>

    <?= $form->field($model->candidate->address->district, 'name')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'organization_id')->textarea(['rows' => '5'])->label('Organização a que se pretende associar')
        ->dropDownList(
            Organization::getSpinnerOptions(true, $model->candidate_id),
            ['prompt' => 'Escolha uma organização']
        );
    ?>

    <?= $form->field($model, 'motivation')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

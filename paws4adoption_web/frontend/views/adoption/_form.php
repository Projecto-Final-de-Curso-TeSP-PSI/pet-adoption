<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Adoption */
/* @var $form yii\widgets\ActiveForm */
/* @var $loggedUser common\models\User */


?>

<div class="adoption-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'breed')->textInput() ?>

    <?= $form->field($loggedUser, 'username')->label() ?>

    <?= $form->field($model, 'motivation')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

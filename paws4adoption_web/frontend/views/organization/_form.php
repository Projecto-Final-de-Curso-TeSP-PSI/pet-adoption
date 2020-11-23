<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Organization */
/* @var $form yii\widgets\ActiveForm */

AppAsset::register($this);
?>

<!-- Profile Settings -->
<div class="row">
    <div class="col-lg-12">
        <div class="profile-settings-form mb-30">
            <div class="userProfileForm">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>Pode registar a sua associação nesta secção</p>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'nif')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'address_id')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <p><b>AVISO: </b>Depois do registo precisa de aguardar até ser aceite</p>

                <?php ActiveForm::end(); ?>

            </div><!-- userProfileForm -->
        </div>
    </div>
</div>
<!-- End Profile Settings -->

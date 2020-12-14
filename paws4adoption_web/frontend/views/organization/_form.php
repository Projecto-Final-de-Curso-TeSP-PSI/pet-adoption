<?php

use common\models\District;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $organization common\models\Organization */
/* @var $address common\models\Address */
/* @var $form yii\widgets\ActiveForm */


AppAsset::register($this);

?>

<!-- Profile Settings -->
<div class="row">
    <div class="col-lg-12">
        <div class="profile-settings-form mb-30">
            <div class="userProfileForm">
                <h1><?= $organization->scenario == 'updateOrganization' ? 'Atualizar associação' : 'Pedido de registo de associação'; ?></h1>

                <p>Pode fazer um pedido de resgisto da sua associação nesta secção</p>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($organization, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($organization, 'nif')->textInput(['maxlength' => true, 'readonly' => ($organization->scenario == 'updateOrganization' ? true : false)]) ?>

                <?= $form->field($organization, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($organization, 'phone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($address, 'street')->textInput(['maxlength' => true]) ?>

                <?= $form->field($address, 'door_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($address, 'floor')->textInput() ?>

                <div class="row">
                    <div class="col-md-4">
                        <?= $form->field($address, 'postal_code')->textInput() ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($address, 'street_code')->textInput() ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <?= $form->field($address, 'city')->textInput() ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <?= $form->field($address, 'district_id')->dropDownList(District::getData(), ['prompt' => 'Escolha o Distrito']) ?>
                    </div>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>  

                <?php ActiveForm::end(); ?>

            </div><!-- userProfileForm -->
        </div>
    </div>
</div>
<!-- End Profile Settings -->

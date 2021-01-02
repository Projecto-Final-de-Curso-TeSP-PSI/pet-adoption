<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Adoption */
/* @var $form yii\widgets\ActiveForm */
/* @var $adoptionModel common\models\Adoption */
/* @var $title */
/* @var $adopter */

AppAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="profile-settings-form mb-30">
                <h1><?= $title ?></h1>
                <hr>
                <div class="CreateAnimalForm">
                    <?php $form = ActiveForm::begin([
                        'id' => 'createAdoption-form',
                        'options' => ['enctype' => 'multipart/form-data']]); ?>

                    <?= $form->field($adopter, 'fullName')->textInput(['placeholder' => 'Insere o nome']) ?>

                    <?= $form->field($adopter->address, 'fullAddress')->textInput(['placeholder' => 'Insere o nome']) ?>

                    <?= $form->field($adopter, 'phone')->textInput(['placeholder' => 'Insere o nome']) ?>

                    <?= $form->field($adopter, 'email')->textInput(['placeholder' => 'Insere o nome']) ?>


                    <?= $form->field($adoptionModel, 'motivation')->textarea(['placeholder' => 'Insere o nome']) ?>


                    <div class="form-group">
                        <?= Html::submitButton('Submeter', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                    <hr>
                    <p><b>Para editar ou eliminar uma publicação já feita aceda à </b>
                        <a href="<?= Yii::$app->request->baseUrl ?>/site/my-list-animals"><b> Minha lista </a></a>
                    </p>

                </div><!-- userProfileForm -->
            </div>
        </div>
    </div>
</div>
<!-- End Profile Settings -->
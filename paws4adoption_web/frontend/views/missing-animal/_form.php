<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MissingAnimal */
/* @var $form yii\widgets\ActiveForm */
?>
<!-- Profile Settings -->
<div class="row">
    <div class="col-lg-12">
        <div class="profile-settings-form mb-30">
            <div class="userProfileForm">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>O seu Animal desaparceu?<br>Publique para que as outras pessoas possam ter conhecimento</p>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'id')->textInput() ?>

                <?= $form->field($model, 'missing_date')->textInput() ?>

                <?= $form->field($model, 'is_missing')->checkbox() ?>

                <?= $form->field($model, 'owner_id')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
                <p><b>Para editar ou eleminar <uma></uma> publicação já feita aceda à </b><a href="<?= Yii::$app->request->baseUrl ?>/site/my-list-animals"><b> Minha lista </a></a></p>

            </div><!-- userProfileForm -->
        </div>
    </div>
</div>
<!-- End Profile Settings -->


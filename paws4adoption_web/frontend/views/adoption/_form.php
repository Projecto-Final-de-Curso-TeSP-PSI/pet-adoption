<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Adoption */
/* @var $form yii\widgets\ActiveForm */
/* @var $model common\models\Adoption */
/* @var $headers [] */

AppAsset::register($this);
?>

<div class="adoption-form">

    <?php $form = ActiveForm::begin(); ?>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Animal a adotar</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-2">
                        <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-60 mr-3 rounded-circle']); ?>
                    </div>
                    <div class="col-sm-10">
                        <?= $form->field($model->adoptedAnimal->animal, 'description')->label(null)?>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Adotante</label>
            <div class="col-sm-10">
                <?= $form->field($model->adopter, 'fullname')?>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Motivação</label>
            <div class="col-sm-10">
                <?= $form->field($model, 'motivation')->textarea(['rows' => 6])->label() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                    <?= Html::submitButton('Submeter', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>

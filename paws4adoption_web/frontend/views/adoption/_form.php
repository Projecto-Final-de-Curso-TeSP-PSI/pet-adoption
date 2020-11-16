<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Adoption */
/* @var $form yii\widgets\ActiveForm */
/* @var $model common\models\Adoption */
/* @var $headers [] */


?>

<div class="adoption-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model->adoptedAnimal->animal, 'description')->label()?>

        <?= $form->field($model->adopter, 'fullname')->label() ?>

        <?= $form->field($model, 'motivation')->textarea(['rows' => 6])->label() ?>

        <div class="form-group">
            <?= Html::submitButton('Submeter', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>

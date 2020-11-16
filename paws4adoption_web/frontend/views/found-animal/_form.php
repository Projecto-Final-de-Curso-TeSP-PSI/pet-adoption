<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FoundAnimal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="found-animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_active')->checkbox() ?>

    <?= $form->field($model, 'found_date')->textInput() ?>

    <?= $form->field($model, 'priority')->dropDownList([ 'Alta' => 'Alta', 'Media' => 'Media', 'Baixa' => 'Baixa', 'Por classificar' => 'Por classificar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

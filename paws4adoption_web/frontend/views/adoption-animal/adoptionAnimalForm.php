<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AdoptionAnimalForm */
/* @var $form ActiveForm */
?>
<div class="adoptionAnimalForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'sex')->radioList(\common\models\Animal::getSex()) ?>
        <?= $form->field($model, 'img')->fileInput() ?>
        <?= $form->field($model, 'nature_id')->dropDownList(\common\models\Nature::getData()) ?>
        <?= $form->field($model, 'fur_length_id')->dropDownList(\common\models\FurLength::getData()) ?>
        <?= $form->field($model, 'fur_color_id')->dropDownList(\common\models\FurColor::getData()) ?>
        <?= $form->field($model, 'size_id')->dropDownList(\common\models\Size::getData()) ?>
        <?= $form->field($model, 'is_on_fat')->checkbox() ?>
        <?= $form->field($model, 'description')->textarea() ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- adoptionAnimalForm -->

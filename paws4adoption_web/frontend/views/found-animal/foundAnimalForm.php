<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FoundAnimal */
/* @var $form ActiveForm */
?>
<div class="foundAnimalForm">

    <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($model, 'nature_id')->dropDownList(\common\models\Nature::getData()) ?>
        <?= $form->field($model, 'fur_length_id')->dropDownList(\common\models\FurLength::getData()) ?>
        <?= $form->field($model, 'fur_color_id')->dropDownList(\common\models\FurColor::getData()) ?>
        <?= $form->field($model, 'size_id')->dropDownList(\common\models\Size::getData()) ?>
        <?= $form->field($model, 'description')->textarea() ?>
        <?= $form->field($model, 'img')->fileInput()?>

        <?= $form->field($model, 'found_date')->widget(\yii\jui\DatePicker::class, [
            'language' => 'pt',
            'dateFormat' => 'dd-MM-yyyy',
        ]) ?>
        <?= $form->field($model, 'location')->textInput() ?>
        <?= $form->field($model, 'is_active')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- foundAnimalForm -->

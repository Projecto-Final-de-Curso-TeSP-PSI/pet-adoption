<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MissingAnimal */
/* @var $form ActiveForm */
?>

<div class="missing-animal-form-container">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-sm-auto">
            <?= $form->field($model, 'sex')->radioList(\common\models\Animal::getSex()) ?>
            <?= $form->field($model, 'nature_id')->dropDownList(\common\models\Nature::getData()) ?>
            <?= $form->field($model, 'fur_length_id')->dropDownList(\common\models\FurLength::getData()) ?>
            <?= $form->field($model, 'fur_color_id')->dropDownList(\common\models\FurColor::getData()) ?>
            <?= $form->field($model, 'size_id')->dropDownList(\common\models\Size::getData()) ?>
            <?= $form->field($model, 'chipId') ?>
            <?= $form->field($model, 'missing_date')->widget(\yii\jui\DatePicker::classname(), [
                'language' => 'pt',
                'dateFormat' => 'dd-MM-yyyy',
            ]) ?>
            <?= $form->field($model, 'is_missing')->checkbox() ?>
            <?= $form->field($model, 'description')->textarea() ?>
            <?= $form->field($model, 'img')->fileInput()?>

        </div>

        <div class="col-sm-auto">

            <div class="img">
                <?= Html::img('', ['alt' => 'Foto do animal'])?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div><!-- missingAnimalForm -->

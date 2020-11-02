<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AnimalForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subClasses')->radioList($model->subClasses) ?>

    <?= $form->field($model, 'chipId')->textInput(['maxlength' => true]) ?>

<!--    <?//= $form->field($model, 'createdAt')->textInput() ?>-->

    <?= $form->field($model, 'specie_id')->dropDownList(\common\models\Specie::getData()) ?>

    <?= $form->field($model, 'breed_id')->dropDownList(\common\models\Breed::getData()) ?>

    <?= $form->field($model, 'fur_length')->dropDownList(\common\models\FurLength::getData()) ?>

    <?= $form->field($model, 'fur_color')->dropDownList(\common\models\FurColor::getData()) ?>

    <?= $form->field($model, 'eye_color')->dropDownList(\common\models\EyeColor::getData()); ?>

    <?= $form->field($model, 'size')->dropDownList(\common\models\Size::getData()); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

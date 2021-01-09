<?php

use common\models\Nature;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Nature */
/* @var $form yii\widgets\ActiveForm */
/* @var $scenario */
/* @var $parent_id */


?>

<div class="nature-form">

    <?php $form = ActiveForm::begin(['id' => $model->scenario == Nature::SCENARIO_SPECIE ? 'Nature[addSpecie]' : 'Nature[addSubSpecie]' ]); ?>

        <?php
            if($model->scenario == Nature::SCENARIO_SUB_SPECIE){
                echo $form->field($model, 'parent_nature_id')
                    ->dropDownList(Nature::getParentsArray(), ['prompt' => 'Escolha a espécie'])
                    ->label('Espécie');
            }
        ?>

        <?= $form->field($model, 'name')
            ->textInput(['maxlength' => true])
            ->label($model->scenario == Nature::SCENARIO_SPECIE ? 'Espécie' : 'Sub-espécie') ?>

        <div class="form-group">
            <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
            <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>

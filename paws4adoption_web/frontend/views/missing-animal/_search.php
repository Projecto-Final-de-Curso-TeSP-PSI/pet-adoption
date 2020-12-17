<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $animalMissingModel common\models\MissingAnimalSearch */
/* @var $animalSearchModel common\models\AnimalSearch */
/* @var $form yii\widgets\ActiveForm */

/* @var $nature */
/* @var $natureCat */
/* @var $natureDog */
/* @var $size */
?>

<div class="missing-animal-search">
    <?php
        $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'id' => 'searchForm'
        ]);

        echo $form->field($animalSearchModel, 'parent_nature_id')->label('Espécie')
        ->dropDownList(ArrayHelper::map($nature,'id', 'name'), ['prompt' => 'Escolha uma espécie']);

        echo $form->field($animalSearchModel, 'natureCat_id')->label('Raça Gato')
        ->dropDownList(ArrayHelper::map($natureCat, 'id', 'name'), ['prompt'=>'-Selecione a raça']);

        echo $form->field($animalSearchModel, 'natureDog_id')->label('Raça Cao')
        ->dropDownList(ArrayHelper::map($natureDog, 'id', 'name'), ['prompt'=>'-Selecione a raça']);

        echo $form->field($animalSearchModel, 'size')->label('Porte')
        ->dropDownList(ArrayHelper::map($size, 'id', 'size'), ['prompt'=>'-Selecione o porte']);

        ActiveForm::end();
    ?>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AnimalMissingSearch */
/* @var $animalModel common\models\AnimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
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
    ]);

    echo $form->field($animalModel, 'name')->label('Especie')
        ->dropDownList(
            $nature,
            ['prompt'=>'-Selecione uma especie',
                'id'=>'name']
        );

    echo $form->field($animalModel, 'name')->label('Raça Gato')
        ->dropDownList(
            $natureCat,
            ['prompt'=>'-Selecione a raça',
                'id'=>'name']
        );

    echo $form->field($animalModel, 'name')->label('Raça Cao')
        ->dropDownList(
            $natureDog,
            ['prompt'=>'-Selecione a raça',
                'id'=>'name']
        );

    echo $form->field($animalModel, 'size')->label('Porte')
        ->dropDownList(
            $size,
            ['prompt'=>'-Selecione o porte',
                'id'=>'size']
        );

    ActiveForm::end();
    ?>

</div>

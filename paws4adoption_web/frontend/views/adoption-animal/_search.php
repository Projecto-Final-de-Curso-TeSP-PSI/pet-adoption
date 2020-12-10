<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $animalAdoptionModel common\models\AnimalAdoptionSearch */
/* @var $animalModel common\models\AnimalSearch */
/* @var $organizationModel common\models\OrganizationSearch */
/* @var $form yii\widgets\ActiveForm */
/* @var $nature */
/* @var $natureCat */
/* @var $natureDog */
/* @var $size */
/* @var $organization */
?>

<div class="adoption-animal-search">

    <?php
    $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'post',
        'id' => 'searchForm'
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

    /*echo $form->field($organizationModel, 'name')->label('Associação')
        ->dropDownList(
            $organization,
            ['prompt'=>'-Selecione uma associação',
                'id'=>'name']
        );*/

    ActiveForm::end();
    ?>
</div>

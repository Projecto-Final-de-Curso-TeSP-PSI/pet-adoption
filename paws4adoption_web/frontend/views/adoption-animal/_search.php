<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $animalAdoptionModel common\models\AnimalAdoptionSearch */
/* @var $animalModel common\models\AnimalSearch */
/* @var $organizationModel common\models\OrganizationSearch */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="adoption-animal-search">

    <?php
    $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]);

    echo $form->field($animalModel, 'name')->label('Especie')
        ->dropDownList(
            $nature,
            ['prompt'=>'-Selecione uma cidade',
                'id'=>'name']
        );

    echo $form->field($animalModel, 'name')->label('Raça Gato')
        ->dropDownList(
            $natureCat,
            ['prompt'=>'-Selecione uma cidade',
                'id'=>'name']
        );

    echo $form->field($animalModel, 'name')->label('Raça Cao')
        ->dropDownList(
            $natureDog,
            ['prompt'=>'-Selecione uma cidade',
                'id'=>'name']
        );

    echo $form->field($animalModel, 'size')->label('Porte')
        ->dropDownList(
            $size,
            ['prompt'=>'-Selecione uma cidade',
                'id'=>'size']
        );

    echo $form->field($organizationModel, 'name')->label('Associação')
        ->dropDownList(
            $organization,
            ['prompt'=>'-Selecione uma cidade',
                'id'=>'name']
        );





    ActiveForm::end();

    ?>


</div>

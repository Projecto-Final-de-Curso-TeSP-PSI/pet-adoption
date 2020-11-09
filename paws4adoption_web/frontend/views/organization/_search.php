<?php

use common\models\Address;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrganizationSearch */
/* @var $form yii\widgets\ActiveForm */
/* @var $searchModel common\models\OrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<div class="organization-search">

    <?php
    $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]);

    echo $form->field($model, 'address')
        ->dropDownList(
            $districts,
            ['prompt'=>'-Selecione uma cidade',
                'id'=>'name']
        );

    echo $form->field($model, 'address')
        ->dropDownList(
            $districts,
            ['prompt'=>'-Selecione uma cidade',
                'id'=>'name']
        );

    echo $form->field($model, 'name')
        ->dropDownList(
            $organizations,
            ['prompt'=>'-Selecione uma cidade',
                'id'=>'name']
        );


    ActiveForm::end();

    ?>

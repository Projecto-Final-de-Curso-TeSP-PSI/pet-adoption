<?php

use common\models\Address;
use common\models\Organization;
use common\models\District;
use frontend\assets\AppAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Organization */
/* @var $form yii\widgets\ActiveForm */
/* @var $searchModel common\models\OrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $districts common\models\District */

AppAsset::register($this);
?>

<div class="organization-search">
    <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'post',
            'id' => 'searchForm'
        ]);

        echo $form->field(new District(), 'id')->label('Distrito')
            ->dropDownList(
                ArrayHelper::map($districts,'id', 'name'),
                [
                    'prompt' => 'Escolha uma organização',
                ]
            );
        ?>

    <?php ActiveForm::end();?>
</div>

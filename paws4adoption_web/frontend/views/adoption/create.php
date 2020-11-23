<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Adoption */
/* @var $title */


$this->title = $title;
$this->params['breadcrumbs'][] = ['label' => 'Adoptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="adoption-create">

    <?= Yii::$app->view->renderFile('@frontend/views/components/_panel.php',
        [
            'title' => $title,
            'content' => $this->render('_form', ['model' => $model]),
            'submitText' => 'Submeter pedido adoção',
        ]); ?>

</div>

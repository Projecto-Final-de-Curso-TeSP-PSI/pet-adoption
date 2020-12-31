<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Nature */

$this->title = 'Create Nature';
$this->params['breadcrumbs'][] = ['label' => 'Natures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nature-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

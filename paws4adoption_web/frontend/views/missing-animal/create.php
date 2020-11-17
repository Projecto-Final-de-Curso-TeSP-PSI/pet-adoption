<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MissingAnimal */

$this->title = 'Create Missing Animal';
$this->params['breadcrumbs'][] = ['label' => 'Missing Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="missing-animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FoundAnimal */

$this->title = 'Update Found Animal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Found Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="found-animal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

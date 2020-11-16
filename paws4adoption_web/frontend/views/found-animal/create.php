<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FoundAnimal */

$this->title = 'Create Found Animal';
$this->params['breadcrumbs'][] = ['label' => 'Found Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="found-animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

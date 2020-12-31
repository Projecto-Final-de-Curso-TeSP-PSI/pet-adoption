<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FurLength */

$this->title = 'Criar novo';
?>
<div class="fur-length-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

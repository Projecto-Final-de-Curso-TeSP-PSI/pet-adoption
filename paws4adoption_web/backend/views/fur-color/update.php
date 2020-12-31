<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FurColor */

$this->title = 'Atualizar côr ' . $model->id;
?>
<div class="fur-color-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

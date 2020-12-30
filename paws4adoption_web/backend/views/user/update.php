<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Atualizar User';
?>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

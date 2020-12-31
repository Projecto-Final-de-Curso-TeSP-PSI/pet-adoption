<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FurColor */

$this->title = 'Criar nova';

?>
<div class="fur-color-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

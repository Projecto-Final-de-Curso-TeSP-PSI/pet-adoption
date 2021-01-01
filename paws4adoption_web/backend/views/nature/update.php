<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Nature */

$this->title = $model->scenario == \common\models\Nature::SCENARIO_SPECIE ? 'Atualizar Espécie' : 'Atualizar Sub-Espécie';
?>
<div class="nature-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

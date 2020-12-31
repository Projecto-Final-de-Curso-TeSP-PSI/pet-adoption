<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Nature */

$this->title = 'Criar Sub-Espécie';

?>
<div class="nature-create">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
</div>

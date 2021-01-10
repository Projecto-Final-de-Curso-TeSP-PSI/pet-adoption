<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AssociatedUserRequest */

$this->title = 'Candidatura a Voluntário';

AppAsset::register($this);
?>
<div class="associated-user-request-create">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>

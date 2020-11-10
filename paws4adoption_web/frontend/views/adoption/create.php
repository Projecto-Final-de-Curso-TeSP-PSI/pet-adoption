<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Adoption */
/* @var $loggedUser common\models\User */

$this->title = 'Create Adoption';
$this->params['breadcrumbs'][] = ['label' => 'Adoptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adoption-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'loggedUser' => $loggedUser
    ]) ?>

</div>

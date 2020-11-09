<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdoptionAnimal */

$this->title = 'Update Adoption Animal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Adoption Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adoption-animal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

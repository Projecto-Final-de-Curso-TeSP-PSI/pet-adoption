<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdoptionAnimal */

$this->title = 'Create Adoption Animal';
$this->params['breadcrumbs'][] = ['label' => 'Adoption Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adoption-animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

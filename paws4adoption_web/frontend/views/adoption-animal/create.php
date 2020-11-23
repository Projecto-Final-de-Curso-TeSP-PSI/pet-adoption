<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdoptionAnimal */

$this->title = 'Publicar Animal para Adopção';
$this->params['breadcrumbs'][] = ['label' => 'Adoption Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);
?>
<div class="adoption-animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('adoptionAnimalForm', [
        'model' => $model,
    ]) ?>

</div>

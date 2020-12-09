<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $animalSearchModel common\models\AnimalSearch */
/* @var $animalMissingSearchModel common\models\AnimalMissingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/* @var $nature */
/* @var $natureCat */
/* @var $natureDog */
/* @var $size */

$this->title = 'Animais Desaparecidos';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="container">
    <div class="divTitleButtonFilter">
        <h1><?= Html::encode($this->title) ?></h1>

        <?= Html::button('Filtrar', [
            'class' => 'btn btn-primary btnFilter',
            'id' => 'btnFilter',
            'data-toggle' => 'modal',
            'data-target' => '#modalFilter',
        ]) ?>
    </div>
    <div>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '../components/_itemListAnimal',
            'layout' => "{pager}\n{items}",
            'options' => ['class' => 'row'],
            'itemOptions' => ['class' => 'col-xl-4 col-lg-4 col-sm-6']
        ])
        ?>
    </div>
</div>
<!-- Modal do filtro -->
<?= Yii::$app->view->renderFile('@frontend/views/components/_modal.php',
    ['title' => 'Filtro Animais para Adoção',
        'content' => $this->render('_search', [
            'animalSearchModel' => $animalSearchModel,
            'animalMissingModel' => $animalMissingSearchModel,
            'dataProvider' => $dataProvider,
            'nature' => $nature,
            'natureCat' => $natureCat,
            'natureDog' => $natureDog,
            'size' => $size,
        ]),
        'submitBtnId' => 'MissingAnimalFilterBtn',
        'submitText' => 'Filtrar',
        'closeText' => 'Fechar'
    ]); ?>


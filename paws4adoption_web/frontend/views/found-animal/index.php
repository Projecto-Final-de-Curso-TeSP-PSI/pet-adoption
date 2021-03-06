<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $animalSearchModel common\models\AnimalSearch */
/* @var $animalFoundSearchModel common\models\FoundAnimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/* @var $nature */
/* @var $natureCat */
/* @var $natureDog */
/* @var $size */
/* @var $organization */

$this->title = 'Animais Errantes';

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
        <?= Html::a('Limpar Filtro', ['index'], [
            'class' => 'btn btn-primary',
        ]) ?>
    </div>
    <div>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '../components/_itemListAnimal',
            'layout' => "{items}</div><div>{pager}",
            'options' => ['class' => 'row'],
            'pager' => [
                'options' => [
                    'class' => 'pagination',
                ],
                'linkContainerOptions' => ['class'=>'page-item'],
                'linkOptions' => ['class' => 'page-link'],
            ],
            'itemOptions' => ['class' => 'col-xl-4 col-lg-4 col-sm-6']
        ])
        ?>
    </div>
</div>

<!-- Modal do filtro -->
<?= Yii::$app->view->renderFile('@frontend/views/components/_modal.php',
    ['title' => 'Filtro Animais Errantes',
        'content' => $this->render('_search', [
            'animalSearchModel' => $animalSearchModel,
            'animalFoundModel' => $animalFoundSearchModel,
            'dataProvider' => $dataProvider,
            'nature' => $nature,
            'natureCat' => $natureCat,
            'natureDog' => $natureDog,
            'size' => $size,
        ]),
        'submitBtnId' => 'FoundAnimalFilterBtn',
        'submitText' => 'Filtrar',
        'closeText' => 'Fechar'
    ]); ?>

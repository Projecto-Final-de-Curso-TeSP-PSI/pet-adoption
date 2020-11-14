<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $animalSearchModel common\models\AnimalSearch */
/* @var $animalAdoptionSearchModel common\models\AnimalAdoptionSearch */
/* @var $organizationSearchModel common\models\OrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $nature */
/* @var $natureCat */
/* @var $natureDog */
/* @var $size */
/* @var $organization */

$this->title = 'Adota-me';

?>

<div class="container">


    <div class="divTitleButtonFilter">
        <h1><?= Html::encode($this->title) ?></h1>

        <?= Html::button('Filtrar', [
            'class' => 'btn btn-success',
            'id' => 'btnFilter',
            'data-toggle' => 'modal',
            'data-target' => '#modalFilter',
        ]) ?>
    </div>
    <div>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_itemListAdoptAnimal',
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
            'animalModel' => $animalSearchModel,
            'animalAdoptionModel' => $animalAdoptionSearchModel,
            'organizationModel' => $organizationSearchModel,
            'dataProvider' => $dataProvider,
            'nature' => $nature,
            'natureCat' => $natureCat,
            'natureDog' => $natureDog,
            'size' => $size,
            'organization' => $organization
        ]),
        'submitText' => 'Filtrar',
        'closeText' => 'Fechar'
    ]); ?>

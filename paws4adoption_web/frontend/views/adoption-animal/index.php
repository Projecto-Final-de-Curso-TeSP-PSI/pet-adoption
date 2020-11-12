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
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adoption-animal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Adoption Animal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <div class="container">
        <div class="row">
            <div class="col-lg-offset-10">
                <?= Html::button('Filtrar', [
                    'class' => 'btn btn-success',
                    'id' => 'btnFilter',
                    'data-toggle' => 'modal',
                    'data-target' => '#modalFilter',
                ]) ?>
            </div>
        </div>
        <div class="row">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_itemListAdoptAnimal',
                'viewParams' => [
                    'fullView' => true,
                    'context' => 'main-page',
                ],
                'layout' => "{pager}\n{items}",
            ])
            ?>
        </div>
    </div>

    <?php Modal::begin([
        'header' => 'Filtrar Associações',
        'id'=>'modalFilter',
        'size'=>'modal-md',
    ]);?>
    <div class='modalContent yii-modal'>

        <?php echo $this->render('_search', [
            'animalModel' => $animalSearchModel,
            'animalAdoptionModel' => $animalAdoptionSearchModel,
            'organizationModel' => $organizationSearchModel,
            'dataProvider' => $dataProvider,
            'nature' => $nature,
            'natureCat' => $natureCat,
            'natureDog' => $natureDog,
            'size' => $size,
            'organization' => $organization
        ]);
        ?>
        <?php Modal::end(); ?>
    </div>

</div>

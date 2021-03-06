<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AdoptionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adoptions';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="adoption-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Adoption', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'motivation:ntext',
            'adoption_date',
            'adopted_animal_id',
            'adopter_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

<?php

use common\models\Organization;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organizações';
?>
<div class="organization-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'tableOptions' => [
            'class' => 'table table-striped',
        ],
        'options' => [
            'class' => 'table-responsive',
        ],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            [
                'headerOptions' => ['class' => 'hidden-xs hidden-sm'],
                'attribute' => 'nif',
                'contentOptions' => ['class' => 'hidden-xs hidden-sm'],
            ],
            [
                'headerOptions' => ['class' => 'hidden-xs hidden-sm'],
                'attribute' => 'email',
                'contentOptions' => ['class' => 'hidden-xs hidden-sm'],
            ],
            [
                'attribute' => 'phone',
                'headerOptions' => ['class' => 'hidden-xs hidden-sm  hidden-md'],
                'contentOptions' => ['class' => 'hidden-xs hidden-sm  hidden-md'],
            ],
            [
                'attribute' => 'city',
                'headerOptions' => ['class' => 'hidden-xs hidden-sm hidden-md'],
                'contentOptions' => ['class' => 'hidden-xs hidden-sm  hidden-md'],
            ],
            [
                'attribute' => 'statusHtml',
                'format' => 'html'
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {myButton}',
                'buttons' => [
                    'myButton' => function ($url,$model,$key) {
                        return Html::a(
                            '<span class="glyphicon ' . ($model->status == Organization::STATUS_ACTIVE ? 'glyphicon-remove-circle gi-block' : 'glyphicon-ok-circle gi-unblock') . '"></span>',
                            Url::to(['organization/block', 'id' => $model->id]),
                            [
                                'title' => ($model->status == Organization::STATUS_ACTIVE ? 'Bloquear' : 'Desbloquear' )
                            ],
                        );
                    },
                ],
            ],
        ],
    ]); ?>

</div>

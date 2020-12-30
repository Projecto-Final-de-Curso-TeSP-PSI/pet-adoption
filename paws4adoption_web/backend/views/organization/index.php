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
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'nif',
            'email:email',
            'phone',
            'address.city',
            [
                'header' => 'Estado',
                'content' => function($model) {
                    return  Html::tag(
                        'span',
                        $model->status == Organization::ACTIVE ? 'Ativo' : 'Inactivo',
                        ['class' => $model->status == Organization::ACTIVE ? 'btn btn-success btn-xs' : 'btn btn-danger btn-xs']
                    );
                }
            ],
            [
                'header' => 'Ação',
                'content' => function($model, $key, $index, $column) {
                    return Html::a(
                        '<i class="fa fa-euro">' . ($model->status === Organization::ACTIVE ? 'Bloquear' : 'Desbloquear') . '</i>',
                        Url::to(['organization/block', 'id' => $model->id]),
                        [  'class' => $model->status == Organization::ACTIVE ? 'btn btn-danger btn-xs' : 'btn btn-success btn-xs'],
                    );
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {myButton}',
            ],
        ],
    ]); ?>

</div>

<?php

use common\models\Organization;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organizações pendentes de aprovação';
?>
<div class="organization-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
                'header' => 'Ação',
                'content' => function($model, $key, $index, $column) {
                    return Html::a(
                        '<i class="fa fa-euro">Aprovar</i>',
                        Url::to(['organization/approve-organization', 'id' => $model->id]),
                        [  'class' => 'btn btn-success btn-xs'],
                    );
                }
            ],
            [
                'header' => 'Ação',
                'content' => function($model, $key, $index, $column) {
                    return Html::a(
                        '<i class="fa fa-euro">Reprovar</i>',
                        Url::to(['organization/reprove-organization', 'id' => $model->id]),
                            [  'class' => 'btn btn-danger btn-xs'],
                        );
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {myButton}',
                'buttons' => [
                    '{myButton}' => function($url, $model, $key) {
                        return Html::a('<i class="fa fa-user"> </i>', 'index');
                    }
                ],
            ],
        ],
    ]); ?>

</div>

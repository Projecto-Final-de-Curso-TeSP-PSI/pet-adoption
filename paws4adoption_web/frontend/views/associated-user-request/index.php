<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AssociatedUserRequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Novos voluntários';
AppAsset::register($this);
?>
<div class="associated-user-request-index">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>
                <?= Html::a('Voltar', ['organization/associate-manage'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'candidate.fullName',
                    'motivation',
                    [
                        'header' => 'Aprovar?',
                        'headerOptions' => [
                            'colspan' => '2',
                            'class' => 'text-center warning'
                        ],
                        'content' => function($model, $key, $index, $column) {
                            return Html::a(
                                '<i class="fa fa-euro">Aprovar</i>',
                                Url::to(['associated-user-request/approve', 'id' => $model->id]),
                                [  'class' => 'btn btn-success btn-xs'],
                                );
                        },
                    ],
                    [
                        'content' => function($model, $key, $index, $column) {
                            return Html::a(
                                '<i class="fa fa-euro">Reprovar</i>',
                                Url::to(['associated-user-request/reprove', 'id' => $model->id]),
                                [  'class' => 'btn btn-danger btn-xs'],
                                );
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>

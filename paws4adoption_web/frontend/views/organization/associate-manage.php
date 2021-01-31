<?php

use common\models\Organization;
use frontend\assets\AppAsset;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $organizationName */


$this->title = 'Gestão Utilizadores Associação ';

AppAsset::register($this);
?>

<div class="container">
    <div class="divTitleButtonFilter">
        <div class="">
            <h1><?= Html::encode($this->title) ?></h1>
            <h3 class="subTitle"><?=$organizationName->name?></h3>
        </div>

        <div>
            <p>

                <?= Html::a( '<i data-feather="user-plus" class="icon"></i>' . ' Associar novos membros', ['associated-user-request/index'], ['class' => 'btn btn-success btn-newMembers']) ?>
            </p>
        </div>
    </div>

    <div>
        <?=
        GridView::widget([
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
                'fullName',
                [
                    'headerOptions' => ['class' => 'hidden-xs hidden-sm'],
                    'attribute' => 'email',
                    'contentOptions' => ['class' => 'hidden-xs hidden-sm'],
                ],
                [
                    'headerOptions' => ['class' => 'hidden-xs hidden-sm'],
                    'attribute' => 'phone',
                    'contentOptions' => ['class' => 'hidden-xs hidden-sm'],
                ],
                [
                    'headerOptions' => ['class' => 'hidden-xs hidden-sm'],
                    'attribute' => 'address.city',
                    'contentOptions' => ['class' => 'hidden-xs hidden-sm'],
                ],
                [
                    'header' => 'Ação',
                    'content' => function($model, $key, $index, $column) {
                        if($key == Yii::$app->user->id) {
                            return Html::a(
                                'Remover',
                                Url::to(['organization/associate-remove', 'id' => $model->id]),
                                [
                                    'class' => 'btn btn-danger btn-xs',
                                    'data' => [
                                        'confirm' => 'Tem a certeza que pretende remover-se a si próprio? Ficará sem acesso à associação!',
                                        'method' => 'post',
                                    ]
                                ]
                            );
                        } else{
                            return Html::a(
                                'Remover',
                                Url::to(['organization/associate-remove', 'id' => $model->id]),
                                [
                                    'class' => $model->status == Organization::STATUS_ACTIVE ? 'btn btn-danger btn-xs' : 'btn btn-success btn-xs',
                                    'data' => [
                                        'confirm' => 'Confirma que pretende remover o utilizador?',
                                        'method' => 'post',
                                    ]
                                ]
                            );
                        }
                    }
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {update} {myButton}',
                ],

            ],
        ]); ?>

    </div>

</div>








<?php

use common\classes\RoleManager;
use yii\bootstrap\ButtonDropdown;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\User;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'fullName',
            'username',
            'nif',
            'phone',
            ['attribute' => 'statusHtml', 'header' => 'Estado', 'format' => 'html'],
            ['attribute' => 'adminPermissionStatusHtml', 'format' => 'html'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {block} {admin}',
                'buttons' => [
                    'block' => function ($url, $model, $key) {
                        if($key == Yii::$app->user->id)
                            $data =  [
                            'confirm' => 'Tem a certeza que pretende bloquear-se a si próprio?',
                            'method' => 'post',
                            ];
                        else
                            $data = [];

                        return Html::a(
                            $model->actionButtonBlock['html'],
                            Url::to(['user/block', 'id' => $model->id]),
                            [
                                'title' => $model->actionButtonBlock['text'],
                                'data' => $data
                            ],
                        );
                    },
                    'admin' =>function ($url, $model, $key) {
                        if($key == Yii::$app->user->id)
                            $data =  [
                                'confirm' => 'Tem a certeza que pretende remover permissão de Admin a si próprio? Ficará sem acesso ao backoffice!',
                                'method' => 'post',
                            ];
                        else
                            $data = [];

                        return Html::a(
                            $model->actionButtonAdmin['html'],
                            Url::to(['user/set-unset-admin', 'user_id' => $key]),
                            [
                                'title' => $model->actionButtonAdmin['text'],
                                'data' => $data
                            ],
                            );
                    },
                ],
            ],
        ],
    ]); ?>

</div>

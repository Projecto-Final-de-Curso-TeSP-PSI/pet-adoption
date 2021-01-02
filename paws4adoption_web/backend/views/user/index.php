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
            'id',
            'firstName',
            'lastName',
            'email:email',
            'nif',
            'phone',
            'username',
            'created_at',
            [
                'header' => 'Gerir Utilizador',
                'content' => function($model) {
                    return  Html::tag('span',
                        $model->status == User::STATUS_ACTIVE ? 'Ativo' : 'Inactivo',
                        ['class' => $model->status == User::STATUS_ACTIVE ? 'btn btn-success btn-xs' : 'btn btn-danger btn-xs']
                    );
                }
            ],
            [
                'header' => 'Ação',
                'content' => function($model, $key, $index, $column) {
                    if($key == Yii::$app->user->id){
                        return Html::a(
                            '<i class="fa fa-euro">' . ($model->status === User::STATUS_ACTIVE ? 'Bloquear' : 'Desbloquear') . '</i>',
                            Url::to(['user/block', 'id' => $model->id]),
                            [
                                'class' => $model->status == User::STATUS_ACTIVE ? 'btn btn-danger btn-xs' : 'btn btn-success btn-xs',
                                'data' => [
                                    'confirm' => 'Tem a certeza que pretende bloquear-se a si próprio? Ficará sem acesso ao backoffice!',
                                    'method' => 'post',
                                ]
                            ]
                        );
                    } else {
                        return Html::a(
                            '<i class="fa fa-euro">' . ($model->status === User::STATUS_ACTIVE ? 'Bloquear' : 'Desbloquear') . '</i>',
                            Url::to(['user/block', 'id' => $model->id]),
                            [  'class' => $model->status == User::STATUS_ACTIVE ? 'btn btn-danger btn-xs' : 'btn btn-success btn-xs'],
                            );
                    }
                },
            ],
            [
                'header' => 'Gerir Admin',
                'content' => function($model, $key, $index, $column) {
                    $userHasAdminRole = RoleManager::userHasRole(RoleManager::ADMIN_ROLE, $key);
                    return  Html::tag('span',
                        $userHasAdminRole ? 'Admin' : '-',
                        ['class' => $userHasAdminRole ? 'btn btn-info btn-xs' : '']
                    );
                }
            ],
            [
                'header' => 'Ação',
                'content' => function($model, $key, $index, $column) {
                    $userHasAdminRole = RoleManager::userHasRole(RoleManager::ADMIN_ROLE, $key);
                    if($key == Yii::$app->user->id){
                        return Html::a(
                            $userHasAdminRole ? 'Remover' : 'Tornar Adicionar',
                            Url::to(['user/set-unset-admin', 'user_id' => $key]),
                            [
                                'class' =>  $userHasAdminRole ? 'btn btn-danger btn-xs' : 'btn btn-success btn-xs',
                                'data' => [
                                    'confirm' => 'Tem a certeza que pretende remover permissão de Admin a si próprio? Ficará sem acesso ao backoffice!',
                                    'method' => 'post',
                                ]
                            ]
                        );
                    } else {
                        return Html::a(
                            $userHasAdminRole? 'Remover' : 'Tornar Admin',
                            Url::to(['user/set-unset-admin', 'user_id' => $key]),
                            [  'class' => $userHasAdminRole ? 'btn btn-danger btn-xs' : 'btn btn-success btn-xs'],
                            );
                    }
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
            ],
        ],
    ]); ?>


</div>

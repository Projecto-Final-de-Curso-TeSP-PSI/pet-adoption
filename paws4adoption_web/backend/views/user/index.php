<?php

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

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'firstName',
            'lastName',
            'email:email',
            'nif',
            'phone',
            'username',
            'created_at',
            [
                'header' => 'Estado',
                'content' => function($model) {
                    return  Html::tag('span',
                        $model->status == User::STATUS_ACTIVE ? 'Ativo' : 'Inactivo',
                        ['class' => $model->status == User::STATUS_ACTIVE ? 'btn btn-success btn-xs' : 'btn btn-success btn-xs']
                    );
                }
            ],
            [
                'header' => 'Ação',
                'content' => function($model, $key, $index, $column) {
                    return Html::a(
                        '<i class="fa fa-euro">' . ($model->status === User::STATUS_ACTIVE ? 'Bloquear' : 'Desbloquear') . '</i>',
                        Url::to(['user/block', 'id' => $model->id]),
                        [  'class' => $model->status == User::STATUS_ACTIVE ? 'btn btn-danger btn-xs' : 'btn btn-success btn-xs'],
                        );
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

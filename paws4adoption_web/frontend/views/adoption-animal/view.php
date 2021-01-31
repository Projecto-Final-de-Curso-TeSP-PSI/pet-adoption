<?php

use frontend\assets\AppAsset;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\AdoptionAnimal */
/* @var $dataProvider */
/* @var $searchModel */
/* @var $organizationName */

$this->title = $model->animal->name;
AppAsset::register($this);
?>

<div class="container">
    <div class="card mb-30 divTab">
        <div class="card-body">
            <h1 class="title"><?= 'Pedidos de adoção para '.$this->title ?></h1>
            <h3 class="subTitle"><?=$organizationName->name?></h3>
            <?= Html::img('@images/'. $model->animal->photos[0]->name . '.jpg',  ['alt' => 'Card Image', 'class' => 'card-img radius-0 image-animal-grid']);?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'id',
                    'adopter.fullName',
                    'motivation',
                    [
                        'header' => 'Ações',
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{approve} {reject}',
                        'buttons' => [
                            'approve' => function($url, $model, $key) {     // render your custom button
                                return  Html::a('Aprovar',
                                    Url::toRoute([
                                        'adoption/accept-adoption-request',
                                        'id' => Html::encode($key),
                                        'animal_id' => $model->adoptedAnimal->id
                                    ]),
                                    [
                                        'class' => 'btn btn-success',
                                        'title' => 'Aprovar este pedido de adoção',
                                    ]
                                );
                            },
                            'reject' => function($url, $model, $key) {     // render your custom button
                                return Html::a('Rejeitar',
                                    Url::toRoute([
                                        'adoption/delete',
                                        'id' => Html::encode($key),
                                        'animal_id' => $model->adoptedAnimal->id
                                    ]),
                                    [
                                        'class' => 'btn btn-danger',
                                        'title' => 'Rejeitar este pedido de adopção',
                                        'data' => [
                                            'method' => 'post',
                                        ],
                                    ]
                                );
                            },
                        ],
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>

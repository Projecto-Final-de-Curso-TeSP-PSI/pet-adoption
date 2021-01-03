<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\AdoptionAnimal */
/* @var $dataProvider */
/* @var $searchModel */

$this->title = $model->animal->name;
\yii\web\YiiAsset::register($this);
?>

<div class="container">
    <div class="card mb-30 divTab">
        <div class="card-body">
            <h2 class="title"><?= 'Pedidos de adoção para '.$this->title ?></h2>
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

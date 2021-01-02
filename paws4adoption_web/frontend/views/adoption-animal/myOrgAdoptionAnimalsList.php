<?php

use frontend\assets\AppAsset;
use frontend\controllers\AdoptionController;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $dataProviderAdoptionAnimal yii\data\ActiveDataProvider */
/* @var $dataProviderAnimalsWithAdoptionRequests yii\data\ActiveDataProvider */
/* @var $searchAdoptionAnimalModel */

AppAsset::register($this);

$this->title = 'Animais para adotar na minha associação';

?>

<div class="container">
    <div class="card mb-30 divTab">
        <div class="card-body">
            <h2 class="title"><?= $this->title ?></h2>

            <?= GridView::widget([
                'dataProvider' => $dataProviderAdoptionAnimal,
                'filterModel' => $searchAdoptionAnimalModel,
                'columns' => [
                    'id',
                    [
                        'header' => 'Foto',
                        'content' => function($model) {
                            return Html::img('@images/'. $model->animal->photos[0]->name . '.jpg',  ['alt' => 'Card Image', 'class' => 'card-img radius-0 image-animal-grid']);
                        }
                    ],
                    'animal.name',
                    [
                        'header' => 'Em FAT?',
                        'content' => function($model) {
                            return  Html::tag(
                                'span',
                                $model->is_on_fat ? 'Sim' : 'Não',
                            );
                        }
                    ],
                    [
                        'header' => 'Pedidos de adopção',
                        'content' => function($model){
                            $count = AdoptionController::getAdoptionRequestsByAnimal($model->id);
                            return Html::tag(
                                null,
                                $count
                            );
                        },
                    ],
                    [
                        'header' => 'Ações',
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update} {delete}',
                        'buttons' => [
                            'view' => function($url, $model, $key) {     // render your custom button
                                return  Html::a('Ver', Url::toRoute(['adoption-animal/view', 'id' => Html::encode($key)]),
                                    [
                                        'class' => 'btn btn-info',
                                        'title' => 'Editar animal',
                                    ]
                                );
                            },
                            'update' => function($url, $model, $key) {     // render your custom button
                                return  Html::a('Editar', Url::toRoute(['adoption-animal/update', 'id' => Html::encode($key)]),
                                    [
                                        'class' => 'btn btn-primary',
                                        'title' => 'Editar animal',
                                    ]
                                );
                            },
                            'delete' => function($url, $model, $key) {     // render your custom button
                                return  Html::a('Eliminar', Url::toRoute(['adoption-animal/delete', 'id' => Html::encode($key)]),
                                    [
                                        'class' => 'btn btn-danger',
                                        'title' => 'Editar animal',
                                    ]
                                );
                            },
                        ],
                    ],
                ]
            ])
            ?>
        </div>
    </div>
</div>


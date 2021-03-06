<?php

use frontend\assets\AppAsset;
use frontend\controllers\AdoptionController;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $dataProviderAdoptionAnimal yii\data\ActiveDataProvider */
/* @var $dataProviderAnimalsWithAdoptionRequests yii\data\ActiveDataProvider */
/* @var $searchAdoptionAnimalModel */
/* @var $organizationName */

AppAsset::register($this);

$this->title = 'Lista de animais para adoção';

?>

<div class="container">
    <div class="card mb-30 divTab">
        <div class="card-body">
            <h1 class="title"><?= $this->title ?></h1>
            <h3 class="subTitle"><?=$organizationName->name?></h3>

            <?= GridView::widget([
                'dataProvider' => $dataProviderAdoptionAnimal,
                'filterModel' => $searchAdoptionAnimalModel,
                'columns' => [
                    'id',
                    [
                        'header' => 'Foto',
                        'content' => function($model) {
                            foreach ($model->animal->photos as $photo){
                                $imgPath = $photo->imgPath;
                            }

                            if($model->animal->photos == null){
                                return Html::img('@images/defaultImg.png',  ['alt' => 'Card Image', 'class' => 'card-img radius-0 image-animal-grid']);
                            }else{
                                return Html::img($imgPath, ['alt' => 'Card Image', 'class' => 'card-img radius-0 image-animal-grid']);
                            }
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
                            $count = count(AdoptionController::getAdoptionRequestsByAnimal($model->id));
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
                                if (count(AdoptionController::getAdoptionRequestsByAnimal($model->id)) !== 0){
                                    return  Html::a('Ver pedidos', Url::toRoute(['adoption-animal/view', 'id' => Html::encode($key)]),
                                        [
                                            'class' => 'btn btn-info',
                                            'title' => 'Ver todos os pedidos de adoção deste animal',
                                        ]
                                    );
                                }
                            },
                            'update' => function($url, $model, $key) {     // render your custom button
                                return  Html::a('Editar', Url::toRoute(['adoption-animal/update', 'id' => Html::encode($key)]),
                                    [
                                        'class' => 'btn btn-primary',
                                        'title' => 'Editar este animal',
                                    ]
                                );
                            },
                            'delete' => function($url, $model, $key) {     // render your custom button
                                if (count(AdoptionController::getAdoptionRequestsByAnimal($model->id)) === 0) {
                                    return Html::a('Eliminar', Url::toRoute(['adoption-animal/delete', 'id' => Html::encode($key)]),
                                        [
                                            'class' => 'btn btn-danger',
                                            'title' => 'Eliminar este animal',
                                            'data' => [
                                                'method' => 'post',
                                            ],
                                        ]
                                    );
                                }
                            },
                        ],
                    ],
                ]
            ])
            ?>
        </div>
    </div>
</div>



<?php

use frontend\assets\AppAsset;
use frontend\controllers\AdoptionController;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $dataProviderFoundAnimal yii\data\ActiveDataProvider */
/* @var $searchFoundAnimalModel */

AppAsset::register($this);

$this->title = 'Animais para adotar na minha associação';

?>

<div class="container">
    <div class="card mb-30 divTab">
        <div class="card-body">
            <h2 class="title"><?= $this->title ?></h2>

            <?= GridView::widget([
                'dataProvider' => $dataProviderFoundAnimal,
                'filterModel' => $searchFoundAnimalModel,
                'columns' => [
                    'id',
                    [
                        'header' => 'Foto',
                        'content' => function($model) {
                            return Html::img('@images/'. $model->animal->photos[0]->name . '.jpg',  ['alt' => 'Card Image', 'class' => 'card-img radius-0 image-animal-grid']);
                        }
                    ],
                    'animal.sex', 'animal.size.size', 'found_date', 'priority',
                    [
                        'header' => 'Ações',
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update} {delete}',
                        'buttons' => [
                                'view' => function ($url, $model, $key) {     // render your custom button
                                return Html::a('Aceitar Resgate', Url::toRoute(['organization/acceptRescue', 'id' => Html::encode($key)]),
                                    [
                                        'class' => 'btn btn-info',
                                        'title' => 'Aceitar Resgate',
                                    ]
                                );
                            },
                            'update' => function($url, $model, $key) {     // render your custom button
                                return  Html::a('Alterar Prioridade', Url::toRoute(['organization/modifyPriority', 'id' => Html::encode($key)]),
                                    [
                                        'class' => 'btn btn-danger',
                                        'title' => 'Alterar Prioridade',
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



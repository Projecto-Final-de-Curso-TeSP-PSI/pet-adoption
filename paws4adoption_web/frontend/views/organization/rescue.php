<?php

use frontend\assets\AppAsset;
use frontend\controllers\AdoptionController;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $dataProviderFoundAnimal yii\data\ActiveDataProvider */
/* @var $organizationName */

AppAsset::register($this);

$this->title = 'Animais para resgante';


?>

<div class="container">
    <div class="card mb-30 divTab">
        <div class="card-body">
            <h2 class="title"><?= $this->title ?></h2>
            <h3 class="subTitle"><?=$organizationName->name?></h3>

            <?= GridView::widget([
                'dataProvider' => $dataProviderFoundAnimal,
                'columns' => [
                    'id',
                    [
                        'header' => 'Foto',
                        'content' => function ($model) {
                            return Html::img('@images/' . $model->animal->photos[0]->name . '.jpg', ['alt' => 'Card Image', 'class' => 'card-img radius-0 image-animal-grid']);
                        }
                    ],
                    'animal.sex', 'animal.size.size', 'found_date',
                    [
                        'header' => 'Localização',
                        'content' => function ($model) {
                            return Html::tag(null, $model->location->fullAddress);
                        }

                    ],
                    [
                        'header' => 'Ações',
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {accept}',
                        'buttons' => [
                            'accept' => function ($url, $model, $key) {     // render your custom button
                                return Html::a('Aceitar Resgate', Url::toRoute(['organization/accept-rescue', 'id' => Html::encode($key)]),
                                    [
                                        'class' => 'btn btn-primary',
                                        'title' => 'Aceitar Resgate',
                                    ]
                                );

                            },
                            'view' => function ($url, $model, $key) {     // render your custom button

                                return Html::a('Detalhes', Url::toRoute(['organization/details-rescue', 'id' => Html::encode($key)]),
                                    [
                                        'class' => 'btn btn-info',
                                        'title' => 'Detalhes',

                                    ]
                                );

                            },

                        ],
                    ],
                ]
            ]);

            ?>
        </div>
    </div>
</div>



<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $dataProviderMissingAnimal yii\data\ActiveDataProvider */
/* @var $dataProviderAdoptionAnimal yii\data\ActiveDataProvider */
/* @var $dataProviderFoundAnimal yii\data\ActiveDataProvider */


AppAsset::register($this);

$this->title = 'Os meus animais perdidos';
?>

<div class="container">
    <div class="card mb-30 divTab">
        <div class="card-body">
            <h2 class="title">Os meus animais</h2>
            <div class="tabs-style-two">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link tabLink active" data-toggle="tab" href="#demo_three_profile">Animais Desaparcidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tabLink" data-toggle="tab" href="#demo_three_contact">Animais Errantes</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="demo_three_profile" role="tabpanel">
                        <?= ListView::widget([
                            'dataProvider' => $dataProviderMissingAnimal,
                            'itemView' => '../components/_itemListAnimal',
                            'layout' => "{pager}\n{items}",
                            'options' => ['class' => 'row'],
                            'itemOptions' => ['class' => 'col-xl-4 col-lg-4 col-sm-6'],
                            'emptyText' => 'Sem resultados para mostrar'
                        ])
                        ?>
                    </div>

                    <div class="tab-pane fade" id="demo_three_contact" role="tabpanel">
                        <?= ListView::widget([
                            'dataProvider' => $dataProviderFoundAnimal,
                            'itemView' => '../components/_itemListAnimal',
                            'layout' => "{pager}\n{items}",
                            'options' => ['class' => 'row'],
                            'itemOptions' => ['class' => 'col-xl-4 col-lg-4 col-sm-6'],
                            'emptyText' => 'Sem resultados para mostrar'
                        ])
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>




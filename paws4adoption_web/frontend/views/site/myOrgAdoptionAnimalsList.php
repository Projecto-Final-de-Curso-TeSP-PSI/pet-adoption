<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $dataProviderAdoptionAnimal yii\data\ActiveDataProvider */
/* @var $dataProviderAnimalsWithAdoptionRequests yii\data\ActiveDataProvider */

AppAsset::register($this);

$this->title = 'Animais para adotar na minha associação';

//var_dump($dataProviderAdoptionAnimal);
//var_dump($dataProviderAnimalsWithAdoptionRequests);
//die;

?>

<div class="container">
    <div class="card mb-30 divTab">
        <div class="card-body">
            <h2 class="title"><?= $this->title ?></h2>
            <div class="tabs-style-two">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link tabLink active" data-toggle="tab" href="#demo_three_profile">Animais para adoptar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tabLink" data-toggle="tab" href="#demo_three_contact">Animais com Pedidos de Adoção</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="demo_three_profile" role="tabpanel">
                        <?= ListView::widget([
                            'dataProvider' => $dataProviderAdoptionAnimal,
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
                            'dataProvider' => $dataProviderAnimalsWithAdoptionRequests,
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
</div>



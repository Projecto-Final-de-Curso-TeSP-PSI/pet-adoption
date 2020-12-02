<?php

use frontend\assets\AppAsset;
use \yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProviderMissingAnimal yii\data\ActiveDataProvider */
/* @var $dataProviderAdoptionAnimal yii\data\ActiveDataProvider */
/* @var $dataProviderFoundAnimal yii\data\ActiveDataProvider */
/* @var $dataProviderPhoto yii\data\ActiveDataProvider */

$this->title = 'My Yii Application';
AppAsset::register($this);
?>
<div class="site-index">

    <div class="logoImg">
        <?= Html::img('@web/images/LogoGrande.png', ['alt' => 'Logo']); ?>
    </div>
    <div class="container">
        <div class="body-content">

                <div class="card mb-30 divTab">
                    <div class="card-body">
                        <h2 class="title">Destaques</h2>
                        <div class="tabs-style-two">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active tabLink" data-toggle="tab" href="#demo_three_home">Animais para Adoção</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabLink" data-toggle="tab" href="#demo_three_profile">Animais Desaparcidos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabLink" data-toggle="tab" href="#demo_three_contact">Animais Errantes</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="demo_three_home" role="tabpanel">
                                    <?= ListView::widget([
                                        'dataProvider' => $dataProviderAdoptionAnimal,
                                        'itemView' => '../components/_itemListAnimal',
                                        'layout' => "{pager}\n{items}",
                                        'options' => ['class' => 'row'],
                                        'itemOptions' => ['class' => 'col-xl-4 col-lg-4 col-sm-6']
                                    ])
                                    ?>
                                </div>

                                <div class="tab-pane fade" id="demo_three_profile" role="tabpanel">
                                    <?= ListView::widget([
                                        'dataProvider' => $dataProviderMissingAnimal,
                                        'itemView' => '../components/_itemListAnimal',
                                        'layout' => "{pager}\n{items}",
                                        'options' => ['class' => 'row'],
                                        'itemOptions' => ['class' => 'col-xl-4 col-lg-4 col-sm-6']
                                    ])
                                    ?>
                                </div>

                                <div class="tab-pane fade" id="demo_three_contact" role="tabpanel">
                                    <?= ListView::widget([
                                        'dataProvider' => $dataProviderFoundAnimal,
                                        'itemView' => '../components/_itemListAnimal',
                                        'layout' => "{pager}\n{items}",
                                        'options' => ['class' => 'row'],
                                        'itemOptions' => ['class' => 'col-xl-4 col-lg-4 col-sm-6']
                                    ])
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Divs com informação sobre o projeto -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-title h5 ">No que Consiste o Site</div>
                    <div class="card mb-30">
                        <div class="card-body">
                            <p class="card-text">Este site foi desenvolvido como Projeto Final do Curso Tecnico Superior Profissional de Programação de Sistemas de Informação.
                                Por vicissitudes várias, a vida nos centros urbanos não permite um elevado número de animais por habitação. Assim, confrontados com a necessidade de oferecer as crias, apresentam-se aos donos duas soluções: a partilha nas redes sociais ou o abandono. Se esta última é detestável, a primeira, apesar de louvável, não está isenta de problemas,
                                uma vez que a informação destas publicações nem sempre é fidedigna, levantando problemas de segurança. <br>
                                O trabalho dos canis municipais e associações de defesa dos animais, apesar de muito nobre, nem sempre é amplamente conhecido ou reconhecido pelas comunidades onde atuam.<br>
                                Sendo desta forma com este site pretendemos ajudar as associações e ter um maior numero de adoções.
                                Tambem pretende-se que este site seja um meio de informação sobre animais desaparcidos ou errantes, assim desta forma podemos todos contribuir para que o numero de animais errantes diminua.
                            </p>
                            <a href="<?= Yii::$app->request->baseUrl ?>/site/faq" class="card-link">FAQ</a>
                            <a href="<?= Yii::$app->request->baseUrl ?>/site/help" class="card-link">Ajudar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;


use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $foundAnimal common\models\FoundAnimal */
/* @var $photo common\models\Photo */


AppAsset::register($this);


?>
    <div class="container">
        <h1><?= "Detalhes " . $foundAnimal->animal->name ?></h1>

        <div class="card-body">
            <hr class="lineCard">
            <?php
            if ($photo == null) {
                echo Html::img('@images/defaultImg.png', ['alt' => 'Card Image', 'class' => 'card-img radius-0 rescueImg']);
            } else {
                echo Html::img('@images/' . $photo->name . ".jpg", ['alt' => 'Card Image', 'class' => 'card-img radius-0 rescueImg']);
            }

            ?>
            <hr class="lineCard">
            <hr class="lineCard">
            <div class="divInfo divInfoModel divDetailsRescue">

                <div class="divInfoModelSec">
                    <p class="card-text"><b>Nome:</b><br><?= $foundAnimal->animal->name ?></p>
                    <hr>
                    <p class="card-text"><b>Chip: </b><br><?= $foundAnimal->animal->chipId ?></p>
                    <hr>
                    <p class="card-text"><b>Especie:</b><br><?= $foundAnimal->animal->nature->getNameByParentId() ?></p>
                    <hr>
                    <p class="card-text"><b>Raça:</b><br><?= $foundAnimal->animal->nature->name ?></p>
                    <hr>
                    <p class="card-text"><b>Sexo:</b><br><?= $foundAnimal->animal->sex ?></p>

                </div>
                <div class="divInfoModelSec">
                    <p class="card-text"><b>Cor:</b><br><?= $foundAnimal->animal->furColor->fur_color ?></p>
                    <hr>
                    <p class="card-text"><b>Pelagem:</b><br><?= $foundAnimal->animal->furLength->fur_length ?></p>
                    <hr>
                    <p class="card-text"><b>Porte:</b><br><?= $foundAnimal->animal->size->size ?></p>
                    <hr>
                    <p class="card-text"><b>Postado por:</b><br><?= $foundAnimal->user->username ?></p>
                    <hr>
                    <p class="card-text"><b>Localização:</b><br><?= $foundAnimal->location->getFullAddress() ?></p>
                </div>
            </div>
            <hr>
            <p class="card-text pDate"><b>Encontrado em:  </b><?= $foundAnimal->found_date ?></p>
            <p class="card-text pDate"><b>Post feito:  </b><?= $foundAnimal->animal->createdAt ?></p>
            <hr>
            <p class="card-text"><b>Descricao: </b><br></p>
            <p><?= $foundAnimal->animal->description ?></p>
        </div>
    </div>
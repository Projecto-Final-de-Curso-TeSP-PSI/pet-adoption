<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>


<div class="card mb-30">
    <?= Html::img('@web/images/cards/1.jpg', ['alt' => 'Card Image', 'class' => 'card-img radius-0']); ?>
    <div class="card-body">
        <div class="card-title h5">Nome</div>
        <hr class="lineCard">
        <div class="divInfo">
            <p class="card-text">Raça: <?= HtmlPurifier::process($model->animal->nature->name) ?></p>
            <p class="card-text">Sexo: <?= HtmlPurifier::process($model->animal->sex) ?></p>
            <p class="card-text">Porte: <?= HtmlPurifier::process($model->animal->size->size) ?></p>
            <p class="card-text">Post feito a: <?= HtmlPurifier::process($model->animal->createdAt) ?></p>

        </div>
        <hr class="lineCard">
        <button type="button" class="btn btn-primary">Mais informação</button>
    </div>
</div>



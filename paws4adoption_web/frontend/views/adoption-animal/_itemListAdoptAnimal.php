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
            <p class="card-text">Colocado em: <?= HtmlPurifier::process($model->animal->createdAt) ?></p>

            <!-- <p class="card-text">Especie:</p><p><?= HtmlPurifier::process($model->animal->nature->nameByParentId) ?></p>
                <p class="card-text">Pelo:</p><p><?= HtmlPurifier::process($model->animal->furLength->fur_length) ?></p>
                <p class="card-text">Cor:</p><p><?= HtmlPurifier::process($model->animal->furColor->fur_color) ?></p>
                <p class="card-text">Organização:</p><p><?= HtmlPurifier::process($model->organization->name) ?></p>
                <p class="card-text">Descrição:</p><p><?= HtmlPurifier::process($model->animal->description) ?></p> -->


        </div>
        <hr class="lineCard">
        <button type="button" class="btn btn-primary">Mais informação</button>
    </div>
</div>



<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>
<div class="cardAnimals">
    <div class="divAnimalName"><h4>Nome</h4></div>
    <div class="divMainInfo">
        <div class="divImg"><?= Html::img('../../assets/images/gato.jpg')?></div>
        <div class="divInfo">
            <p>Organização:</p><p><?= HtmlPurifier::process($model->organization->name) ?></p>
            <p>Especie:</p><p><?= HtmlPurifier::process($model->animal->nature->nameByParentId) ?></p>
            <p>Raça:</p><p><?= HtmlPurifier::process($model->animal->nature->name) ?></p>
            <p>Sexo:</p><p><?= HtmlPurifier::process($model->animal->sex) ?></p>
            <p>Porte:</p><p><?= HtmlPurifier::process($model->animal->size->size) ?></p>
            <p>Pelo:</p><p><?= HtmlPurifier::process($model->animal->furLength->fur_length) ?></p>
            <p>Cor:</p><p><?= HtmlPurifier::process($model->animal->furColor->fur_color) ?></p>
            <p>Descrição:</p><p><?= HtmlPurifier::process($model->animal->description) ?></p>
            <p>Colocado em:</p><p><?= HtmlPurifier::process($model->animal->createdAt) ?></p>
        </div>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>
<div class="cardAnimals">
    <div class="divAnimalName"><h4>Nome</h4></div>
    <div class="divMainInfo">
        <div class="divImg"><?= Html::img('../../assets/images/gato.jpg')?></div>
        <div class="divInfo">
            <!--<p><?= HtmlPurifier::process($model->chipId) ?></p>-->
            <div class="divCampos">
                <p class="pCampos">Especie:</p><p><?= HtmlPurifier::process($model->nature->nameByParentId) ?></p>
                <p class="pCampos">Raça: </p><p><?= HtmlPurifier::process($model->nature->name) ?></p>
            </div>
            <div class="divCampos">
                <p class="pCampos">Porte: </p><p><?= HtmlPurifier::process($model->size->size) ?></p>
                <p class="pCampos">Sexo: </p><p><?= HtmlPurifier::process($model->sex) ?></p>
            </div>
            <!--<p><?= HtmlPurifier::process($model->furLength->fur_length) ?></p>
            <p><?= HtmlPurifier::process($model->furColor->fur_color) ?></p>
            <p><?= HtmlPurifier::process($model->description) ?></p> -->
        </div>
    </div>
    <div class="postadoEm">
        <p class="pCampos">Postado em:</p>
        <p><?= HtmlPurifier::process($model->createdAt) ?></p>
    </div>
    <!-- <div class="divButoes">

        <!--Div Botoes Lista Perdidos/Errantes
        <!--Div Botoes Lista Adotar
        <div>
            <//?= Html::submitButton('Adotar', ['class' => 'button']) ?>
            <//?= Html::submitButton('FAT', ['class' => 'button']) ?>
        </div>
        <div>
            </?= Html::submitButton('Contactar', ['class' => 'btnAdotar']) ?>
        </div>
        <!--Div Botoes Lista Publicados por mim
        <div>
            <//?= Html::submitButton('Eleminar', ['class' => 'btnAdotar']) ?>
            <//?= Html::submitButton('Editar', ['class' => 'btnAdotar']) ?>
        </div>
    </div> -->
</div>

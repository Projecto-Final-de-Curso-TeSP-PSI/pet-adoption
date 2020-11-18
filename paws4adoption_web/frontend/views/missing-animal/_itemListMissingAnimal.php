<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>


<div class="card mb-30">
    <?= Html::img('@web/images/cards/1.jpg', ['alt' => 'Card Image', 'class' => 'card-img radius-0']); ?>
    <div class="card-body">
        <div class="card-title h5"><?= HtmlPurifier::process($model->id0->name) ?></div>
        <hr class="lineCard">
        <div class="divInfo">
            <p class="card-text"><b>Raça: </b><?= HtmlPurifier::process($model->id0->nature->name) ?></p>
            <p class="card-text"><b>Sexo: </b><?= HtmlPurifier::process($model->id0->sex) ?></p>
            <p class="card-text"><b>Porte: </b><?= HtmlPurifier::process($model->id0->size->size) ?></p>
            <p class="card-text"><b>Colocado </b>em: <?= HtmlPurifier::process($model->id0->createdAt) ?></p>



        </div>
        <hr class="lineCard">
        <?= Html::button('Mais informação', [
            'class' => 'btn btn-primary btn-success',
            'id' => 'btnDetailsAnimal',
            'data-toggle' => 'modal',
            'data-target' => '#modalAnimalDetails',
        ]) ?>
        <!-- Modal dos Detalhes -->
        <?= Yii::$app->view->renderFile('@frontend/views/components/_modalAnimalDetails.php',
            ['title' => 'Detalhes do Animal',

                'type' => $model->gettype(),
                'name' => $model->id0->name,
                'nature' =>$model->id0->nature->nameByParentId,
                'bread' =>$model->id0->nature->name,
                'sex' =>$model->id0->sex,
                'size' =>$model->id0->size->size,
                'color' =>$model->id0->furColor->fur_color,
                'furLength' =>$model->id0->furLength->fur_length,
                'chip' =>$model->id0->chipId,
                'date' =>$model->id0->createdAt,
                'postBy' =>$model->owner->username,
                'missingDate' =>$model->missingDate,

                'description' =>$model->id0->description,

                'submitContact' => 'Contactar',
                'closeText' => 'Fechar'
            ]); ?>
    </div>
</div>



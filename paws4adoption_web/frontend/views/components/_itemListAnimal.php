<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$type = $model->animal->getType();
var_dump($type);
?>


<div class="card mb-30">
    <?= Html::img('@web/images/cards/1.jpg', ['alt' => 'Card Image', 'class' => 'card-img radius-0']); ?>
    <div class="card-body">
        <div class="card-title h5"><?= HtmlPurifier::process($model->animal->name) ?></div>
        <hr class="lineCard">
        <div class="divInfo">
            <p class="card-text"><b>Raça: </b><?= HtmlPurifier::process($model->animal->nature->name) ?></p>
            <p class="card-text"><b>Sexo: </b><?= HtmlPurifier::process($model->animal->sex) ?></p>
            <p class="card-text"><b>Porte: </b> <?= HtmlPurifier::process($model->animal->size->size) ?></p>
            <p class="card-text"><b>Colocado em: </b><?= HtmlPurifier::process($model->animal->createdAt) ?></p>
        </div>

        <hr class="lineCard">
        <?= Html::button('Mais informação', [
            'class' => 'btn btn-primary btn-success',
            'id' => 'btnDetailsAnimal',
            'data-toggle' => 'modal',
            'data-target' => '#modalAnimalDetails',
        ]) ?>

        <!-- Modal dos Detalhes -->
        <?php
        switch ($type) {
            case 'adoptionAnimal':
                echo Yii::$app->view->renderFile('@frontend/views/components/_modalAnimalDetails.php',
                    ['title' => 'Detalhes do Animal',
                        'type' => $type,
                        'name' => $model->animal->name,
                        'nature' => $model->animal->nature->nameByParentId,
                        'bread' => $model->animal->nature->name,
                        'sex' => $model->animal->sex,
                        'size' => $model->animal->size->size,
                        'color' => $model->animal->furColor->fur_color,
                        'furLength' => $model->animal->furLength->fur_length,
                        'chip' => $model->animal->chipId,
                        'date' => $model->animal->createdAt,
                        'postBy' => $model->organization->name,
                        'description' => $model->animal->description,

                        'submitAdoption' => 'Adotar',
                        'submitFat' => 'FAT',
                        'closeText' => 'Fechar'
                    ]);
                break;
            case 'missingAnimal':
                echo Yii::$app->view->renderFile('@frontend/views/components/_modalAnimalDetails.php',
                    ['title' => 'Detalhes do Animal',

                        'type' => $model->gettype(),
                        'name' => $model->animal->name,
                        'nature' => $model->animal->nature->nameByParentId,
                        'bread' => $model->animal->nature->name,
                        'sex' => $model->animal->sex,
                        'size' => $model->animal->size->size,
                        'color' => $model->animal->furColor->fur_color,
                        'furLength' => $model->animal->furLength->fur_length,
                        'chip' => $model->animal->chipId,
                        'date' => $model->animal->createdAt,
                        'postBy' => $model->owner->username,
                        'missingDate' => $model->missingDate,

                        'description' => $model->animal->description,

                        'submitContact' => 'Contactar',
                        'closeText' => 'Fechar'
                    ]);
                break;
            case 'foundAnimal':
                echo Yii::$app->view->renderFile('@frontend/views/components/_modalAnimalDetails.php',
                    ['title' => 'Detalhes do Animal',

                        'type' => $model->animal->gettype(),
                        'name' => $model->animal->name,
                        'nature' => $model->animal->nature->nameByParentId,
                        'bread' => $model->animal->nature->name,
                        'sex' => $model->animal->sex,
                        'size' => $model->animal->size->size,
                        'color' => $model->animal->furColor->fur_color,
                        'furLength' => $model->animal->furLength->fur_length,
                        'chip' => $model->animal->chipId,
                        'date' => $model->animal->createdAt,
                        'postBy' => $model->user->username,
                        'foundDate' => $model->foundDate,
                        'location' => $model->location,
                        'description' => $model->animal->description,

                        'submitContact' => 'Contactar',
                        'closeText' => 'Fechar'
                    ]);
                break;
            default:
                break;

        }
        ?>
    </div>
</div>
<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$animalId = $model->animal->id;
$type = $model->animal->getType();
$photos = $model->animal->photos;

$imgPath = null;

foreach ($photos as $photo){
    $imgPath = $photo->imgPath;
}

?>


<div class="card mb-30">
<?php
    if($imgPath == null){
       echo Html::img('@images/defaultImg.png',  ['alt' => 'Card Image', 'class' => 'card-img radius-0 image-animal']);
    }else{
        echo Html::img($imgPath,  ['alt' => 'Card Image', 'class' => 'card-img radius-0 image-animal']);
    }

 ?>
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
            'data-target' => '#modalAnimalDetails' . $animalId,
        ]) ?>

        <!-- Modal dos Detalhes -->
        <?php
        switch ($type) {
            case 'adoptionAnimal':
                echo Yii::$app->view->renderFile('@frontend/views/components/_modalAnimalDetails.php',
                    ['title' => 'Detalhes do Animal',
                        'animalId' => $animalId,
                        'type' => $type,
                        'imgPath' => $imgPath,
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
                        'animalId' => $animalId,
                        'imgPath' => $imgPath,
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
                        'ownerId' => $model->owner->id,

                        'description' => $model->animal->description,


                        'submitContact' => 'Contactar',
                        'closeText' => 'Fechar'
                    ]);

                echo Yii::$app->view->renderFile('@frontend/views/components/_modalPublisherInfo.php',
                    [
                        'title' => 'Contatos do dono',
                        'modalId' => $animalId,
                        'publisherUsername' => $model->owner->username,
                        'publisherContact' => $model->owner->phone,
                        'publisherEmail' => $model->owner->email,

                        'closeText' => 'Fechar'
                    ]);

                break;
            case 'foundAnimal':
                echo Yii::$app->view->renderFile('@frontend/views/components/_modalAnimalDetails.php',
                    ['title' => 'Detalhes do Animal',
                        'animalId' => $animalId,
                        'imgPath' => $imgPath,
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
                        'userId' => $model->user->id,
                        'found_date' => $model->found_date,
                        'location_id' => $model->location_id,
                        'description' => $model->animal->description,
                        'submitContact' => 'Contactar',
                        'closeText' => 'Fechar'
                    ]);

                echo Yii::$app->view->renderFile('@frontend/views/components/_modalPublisherInfo.php',
                    [
                        'title' => 'Contatos do dono',
                        'modalId' => $animalId,
                        'publisherUsername' => $model->user->username,
                        'publisherContact' => $model->user->phone,
                        'publisherEmail' => $model->user->email,

                        'closeText' => 'Fechar'
                    ]);

                break;
            default:
                break;

        }
        ?>
    </div>
</div>

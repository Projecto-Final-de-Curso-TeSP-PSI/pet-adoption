<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $type */
/* @var $animalId */
/* @var $title */
/* @var $name */
/* @var $nature */
/* @var $bread */
/* @var $sex */
/* @var $size */
/* @var $color */
/* @var $furLength */
/* @var $chip */
/* @var $date */
/* @var $postBy */
/* @var $description */
/* @var $missingDate */
/* @var $found_date */
/* @var $location_id */
/* @var $ownerId */
/* @var $userId */

/* @var $submitAdoption */
/* @var $submitFat */
/* @var $submitContact */
/* @var $closeText */
/* @var $imgPath */

$loggedUserId = Yii::$app->user->id;

?>

<div class="modal fade LargeModal" id='<?= "modalAnimalDetails" . $animalId?>' tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                if($imgPath == null){
                    echo Html::img('@images/defaultImg.png',  ['alt' => 'Card Image', 'class' => 'card-img radius-0']);
                }else{
                    echo Html::img($imgPath,  ['alt' => 'Card Image', 'class' => 'card-img radius-0']);
                }

                ?>

                <div class="card-body">
                    <div class="card-title h5"><?= $name ?> </div>
                    <hr class="lineCard">
                    <div class="divInfo divInfoModel">
                        <div class="divInfoModelSec">
                            <p class="card-text"><b>Especie: </b><?= $nature ?></p>
                            <hr>
                            <p class="card-text"><b>Raça: </b><?= $bread ?></p>
                            <hr>
                            <p class="card-text"><b>Sexo: </b><?= $sex ?></p>
                            <hr>
                            <p class="card-text"><b>Chip: </b><?= $chip ?></p>
                        </div>
                        <div class="divInfoModelSec">
                            <p class="card-text"><b>Cor: </b><?= $color ?></p>
                            <hr>
                            <p class="card-text"><b>Pelagem: </b><?= $furLength ?></p>
                            <hr>
                            <p class="card-text"><b>Porte: </b><?= $size ?></p>
                            <hr>
                            <p class="card-text"><b>Postado por: </b><?= $postBy ?></p>
                        </div>
                    </div>
                    <hr>
                    <?php
                    switch ($type) {
                        case 'missingAnimal':
                            echo '<p class="card-text pDate"><b>Desapareceu em: </b>' . $missingDate . '</p>';
                            break;
                        case 'foundAnimal':
                            echo '<p class="card-text pDate"><b>Encontrado em: </b>' . $found_date . '</p>';
                            echo '<p class="card-text pDate"><b>Local: </b>' . $location_id . '</p>';
                            break;
                        default:
                            break;
                    }
                    ?>
                    <p class="card-text pDate"><b>Post feito: </b><?= $date ?></p>
                    <hr>
                    <p class="card-text"><b>Descricao: </b></p>
                    <p><?= $description ?></p>
                </div>
            </div>

            <div class="modal-footer">
                <?php
                switch($type){

                    case 'adoptionAnimal':
                        echo Html::a($submitAdoption, [ 'adoption/create', 'id' => Html::encode($animalId), 'type'=>'adoption'], [
                            'class' => 'btn btn-primary',
                        ]);
                        echo Html::a($submitFat, [ 'adoption/create', 'id' => Html::encode($animalId), 'type'=>'fat'], [
                            'class' => 'btn btn-primary',
                        ]);
                        //echo '<button id="btnModalSubmit" type="button" class="btn btn-primary"> ' . $submitAdoption . '</button>';
                        //echo '<button id="btnModalSubmit" type="button" class="btn btn-primary"> ' . $submitFat . '</button>';
                        break;

                    case 'missingAnimal':
                        //This button call's modal with owner details

                        if($loggedUserId == $ownerId){

                            echo Html::a('Editar', ['missing-animal/update', 'id' => Html::encode($animalId)], [
                                'class' => 'btn btn-primary',
                                'title' => 'Editar animal',
                            ]);

                            echo Html::button('Eliminar', [
                                'class' => 'btn btn-danger',
                                'title' => 'Eliminar animal',
                                'data-toggle' => 'modal',
                                'data-target' => '#modalYesNo' . Html::encode($animalId),
                                ]
                            );

                        } else{
                            echo Html::button( Html::encode($submitContact), [
                                    'class' => 'btn btn-primary',
                                    'title' => 'Contatos Publicador',
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalPublisherInfo' . $animalId,
                                ]
                            );
                        }

                        break;
                    case 'foundAnimal':
                        //This button call's modal with owner details
                        if($loggedUserId == $userId){

                            echo Html::a('Editar', [ 'found-animal/update', 'id' => Html::encode($animalId)], [
                                'class' => 'btn btn-primary',
                                'title' => 'Editar animal',
                            ]);

                            echo Html::button('Eliminar', [
                                    'class' => 'btn btn-danger',
                                    'title' => 'Eliminar animal',
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalYesNo' . Html::encode($animalId),
                                ]
                            );

                        } else{
                            echo Html::button( Html::encode($submitContact), [
                                    'class' => 'btn btn-primary',
                                    'title' => 'Contatos Publicador',
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalPublisherInfo' . $animalId,
                                ]
                            );
                        }
                        break;
                }

                echo Html::button(Html::encode($closeText), [
                        'class' => "btn btn-secondary",
                        'data-dismiss' => 'modal',
                        'title' => 'Voltar à lista',
                    ]
                );

                ?>

            </div>

        </div>
    </div>
</div>



<?php
switch ($type){
    case "missingAnimal":
        echo Yii::$app->view->renderFile('@frontend/views/components/_modalYesNo.php',
            [
                'route' => 'missing-animal/delete',
                'animalId' => $animalId,
                'title' => 'Eliminar',
                'subtitle' => '',
                'question' => 'Confirmar que prentende eliminar o animal?',
                'dismissButtonText' => 'Cancelar',
                'confirmButtonText' => 'Sim',
            ]);
        break;
    case 'foundAnimal':
        echo Yii::$app->view->renderFile('@frontend/views/components/_modalYesNo.php',
            [
                'route' => 'found-animal/delete',
                'animalId' => $animalId,
                'title' => 'Eliminar',
                'subtitle' => '',
                'question' => 'Confirmar que prentende eliminar o animal?',
                'dismissButtonText' => 'Cancelar',
                'confirmButtonText' => 'Sim',
            ]);
        break;
}

?>


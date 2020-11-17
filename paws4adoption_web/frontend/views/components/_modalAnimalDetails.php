<?php
use yii\helpers\Html;


/* @var $title */
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
?>

<div class="modal fade LargeModal" id="modalAnimalDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

                <?= Html::img('@web/images/cards/1.jpg', ['alt' => 'Card Image', 'class' => 'card-img radius-0']); ?>
                <div class="card-body">
                    <div class="card-title h5">Nome</div>
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
                    <p class="card-text pDate"><b><?= $date ?></b></p>
                    <hr>
                    <p class="card-text"><b>Descricao: </b></p>
                    <p><?= $description ?></p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= $btn1 ?></button>
                <button id="btnModalSubmit" type="button" class="btn btn-primary"><?= $btn2 ?></button>
            </div>
        </div>
    </div>
</div>
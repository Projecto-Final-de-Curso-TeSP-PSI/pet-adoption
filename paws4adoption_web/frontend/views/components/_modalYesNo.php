<?php
    /* @var $publisherUsername */
    /* @var $publisherContact */
    /* @var $publisherEmail */

use yii\bootstrap\Button;
use yii\bootstrap\Nav;
use yii\helpers\Html;


?>

<div class="modal fade" id='<?='modalYesNo' . Html::encode($animalId) ?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><?=Html::encode($title)?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <h5><?=Html::encode($subtitle)?></h5>
                <p><?=Html::encode($question)?></p>
            </div>

            <div class="modal-footer">
                <?php

                echo Html::a(Html::encode($confirmButtonText), [ Html::encode($route), 'id' => Html::encode($animalId)], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'method' => 'post',
                    ],
                ]);

                echo Html::button(Html::encode($dismissButtonText), [
                        'class' => "btn btn-secondary",
                        'data-dismiss' => 'modal',
                    ]
                );

                ?>
            </div>
        </div>
    </div>
</div>
<?php
/* @var $modalId */
/* @var $title */

/* @var $publisherUsername */
/* @var $publisherContact */
/* @var $publisherEmail */

/* @var $closeText */

use yii\helpers\Html; ?>

<div class="modal fade modalPublisherInfo" id='<?= "modalPublisherInfo" . Html::encode($modalId)?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= Html::encode($title) ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= Yii::$app->view->renderFile('@frontend/views/components/_cardPublisherInfo.php',
                    [
                        'publisherUsername' => $publisherUsername,
                        'publisherContact' => $publisherContact,
                        'publisherEmail' => $publisherEmail
                    ]);
                ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= Html::encode($closeText) ?></button>
            </div>
        </div>
    </div>
</div>
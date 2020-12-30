<div class="container-fluid col-md-8\">
    <?php if(Yii::$app->session->hasFlash('Success')){?>
    <div class="alert alert-success alert-dismissible rounded" id="success-message" style="display:block">
        <button type="button" class="close">
            <span aria-hidden="true" id="success-message-dismiss" >×</span>
            <span id="dismiss-message" class="sr-only">Fechar</span>
        </button>
        <span id="error-message-text"><?= Yii::$app->session->getFlash('Success') ?></span>
    </div>
    <?php }?>

    <?php if(Yii::$app->session->hasFlash('Error')){?>
    <div class="alert alert-danger alert-dismissible rounded" id="error-message" style="display:block">
        <button type="button" class="close">
            <span aria-hidden="true" id="error-message-dismiss">×</span>
            <span class="sr-only">Fechar</span>
        </button>
        <span id="error-message-text"><?= Yii::$app->session->getFlash('Error'); ?></span>
    </div>
    <?php }?>
</div>
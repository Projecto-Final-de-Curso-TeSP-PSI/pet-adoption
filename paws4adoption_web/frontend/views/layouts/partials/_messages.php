<div>
    <div class="alert alert-success alert-dismissible rounded" id="success-message" style="display:<?= isset($success_message) ? 'block' : 'none'; ?>">
        <button type="button" class="close">
            <span aria-hidden="true" id="success-message-dismiss" >×</span>
            <span id="dismiss-message" class="sr-only">Fechar</span>
        </button>
        <span id="error-message-text"><?= isset($success_message) ? $success_message : "" ?></span>
    </div>
    <div class="alert alert-danger alert-dismissible rounded" id="error-message" style="display: <?= isset($error_message) ? 'block' : 'none'; ?>">
        <button type="button" class="close">
            <span aria-hidden="true" id="error-message-dismiss">×</span>
            <span class="sr-only">Fechar</span>
        </button>
        <span id="error-message-text"><?= isset($error_message) ? $error_message : "" ?></span>
    </div>
</div>
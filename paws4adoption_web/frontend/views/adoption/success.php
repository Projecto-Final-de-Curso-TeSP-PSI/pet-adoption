<?php

use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<div class="container">
    <?= $this->render('/components/_success', [
        'title' => 'Obrigado',
        'description' => 'O seu formulario foi submetido com sucesso',
        'btnText' => 'Voltar a lista'
    ]) ?>
</div>


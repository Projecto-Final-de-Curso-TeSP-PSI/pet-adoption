<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\helpers\Html; ?>
<div class="site-index">


    <div class="logoImg">
        <?= Html::img('@logo/LogoGrande.png', ['alt' => 'Logo']); ?>
    </div>

    <div class="jumbotron">
        <h1>Bem-vindo ao backoffice da aplicação Paws4adoption</h1>
        <p class="lead">Onde pode fazer a gestão da aplicação</p>
    </div>

</div>

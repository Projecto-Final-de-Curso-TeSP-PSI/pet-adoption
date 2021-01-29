<?php

use common\classes\RoleManager;
use common\models\AssociatedUser;

?>
<div class="sidemenu-area sidemenu-toggle default">
    <nav class="sidemenu navbar navbar-expand navbar-light hide-nav-title">
        <div class="navbar-collapse collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="<?= Yii::$app->homeUrl ?>">
                    <i data-feather="home" class="icon"></i>
                    <span class="title">Paws4Adoption</span>
                </a>
                <a class="nav-link" href="<?= Yii::$app->request->baseUrl ?>/adoption-animal">
                    <i data-feather="heart" class="icon"></i>
                    <span class="title">Adota-me</span>
                </a>
                <a class="nav-link" href="<?= Yii::$app->request->baseUrl ?>/missing-animal">
                    <i data-feather="frown" class="icon"></i>
                    <span class="title">Desaparecidos</span>
                </a>
                <a class="nav-link" href="<?= Yii::$app->request->baseUrl ?>/found-animal">
                    <i data-feather="flag" class="icon"></i>
                    <span class="title">Errantes</span>
                </a>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menuPublish" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-title">
                            <i data-feather="plus" class="icon"></i>
                            <span class="title">
                                Publicar
                                <i data-feather="chevron-right" class="icon fr"></i>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" id="menuPublishMissingAnimal" href="<?= Yii::$app->request->baseUrl ?>/missing-animal/create">
                            <i data-feather="frown" class="icon"></i>
                            Animal Desaparecido
                        </a>
                        <a class="dropdown-item" id="menuPublishFoundAnimal" href="<?= Yii::$app->request->baseUrl ?>/found-animal/create">
                            <i data-feather="flag" class="icon"></i>
                            Animal Errante
                        </a>
                    </div>

                </div>

                <a class="nav-link" href="<?= Yii::$app->request->baseUrl ?>/site/my-list-animals">
                    <i data-feather="archive" class="icon"></i>
                    <span class="title">Minha Lista</span>
                </a>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-title">
                            <i data-feather="plus" class="icon"></i>
                            <span class="title">
                                Associações
                                <i data-feather="chevron-right" class="icon fr"></i>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu">

                        <?php if(!Yii::$app->user->isGuest){
                            if(!RoleManager::userHasRole('associatedUser', Yii::$app->user->id)){?>
                                <a class="dropdown-item" href="<?= Yii::$app->request->baseUrl ?>/organization/create">
                                    <i data-feather="file-plus" class="icon"></i>
                                    <span class="title">Registar Associação</span>
                                </a>
                            <?php } ?>
                        <?php } ?>

                        <a class="dropdown-item" href="<?= Yii::$app->request->baseUrl ?>/organization">
                            <i data-feather="list" class="icon"></i>
                            Lista de associações
                        </a>

                        <?php if(Yii::$app->user->can('associatedUser')){ ?>
                            <a class="dropdown-item" href="<?= Yii::$app->request->baseUrl ?>/organization/associate-manage">
                                <i data-feather="list" class="icon"></i>
                                Gerir Utilizadores Associação
                            </a>
                        <?php } ?>

                        <?php if(!Yii::$app->user->isGuest){
                            if(!RoleManager::userHasRole('associatedUser', Yii::$app->user->id)){?>
                                <a class="dropdown-item" href="<?= Yii::$app->request->baseUrl ?>/associated-user-request/create">
                                    <i data-feather="list" class="icon"></i>
                                    Ser Voluntário
                                </a>
                            <?php } ?>
                        <?php } ?>

                        <?php
                        if (Yii::$app->user->can('createAdoptionAnimal')) {
                            echo
                                '<a class="nav-link" href="' . Yii::$app->request->baseUrl . '/adoption-animal/my-org-adoption-animals">
                                <i data-feather="archive" class="icon"></i>
                                <span class="title">Animais da Associação</span>
                                </a>';
                        } ?>

                        <?php if(Yii::$app->user->can('associatedUser')){ ?>
                            <a class="nav-link" href="<?= Yii::$app->request->baseUrl ?>/organization/rescue">
                                <i data-feather="alert-triangle" class="icon"></i>
                                <span class="title">Pedidos de Resgate</span>
                            </a>
                        <?php } ?>

                        <?php
                        if (Yii::$app->user->can('createAdoptionAnimal')) {
                            echo '<a class="dropdown-item" href="' . Yii::$app->request->baseUrl . '/adoption-animal/create">
                                <i data-feather="flag" class="icon"></i>
                                Publicar Animal para Adopção
                                </a>';
                        }
                        ?>

                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-title">
                            <i data-feather="info" class="icon"></i>
                            <span class="title">
                                Informações
                                <i data-feather="chevron-right" class="icon fr"></i>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= Yii::$app->request->baseUrl ?>/site/help">
                            <i data-feather="help-circle" class="icon"></i>
                            Como Ajudar
                        </a>
                        <a class="dropdown-item" href="<?= Yii::$app->request->baseUrl ?>/site/contact">
                            <i data-feather="info" class="icon"></i>
                            Entre em contacto
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
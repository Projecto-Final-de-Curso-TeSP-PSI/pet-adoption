<?php
use yii\helpers\Html;
?>
<nav class="navbar navbar-expand fixed-top top-menu">

    <!-- Burger menu -->
    <div id="sideMenuBurguer" class="burger-menu toggle-menu">
        <span class="top-bar"></span>
        <span class="middle-bar"></span>
        <span class="bottom-bar"></span>
    </div>

    <!-- Nav Bar Logo -->
    <a class="navbar-brand" href="/">
        <!-- Large logo -->
        <?= Html::img('@web/images/LogoProjetoFinal.png', ['alt' => 'Logo', 'class' => 'large-logo']); ?>
        <?= Html::img('@web/images/small-logo.png', ['alt' => 'Logo', 'class' => 'small-logo']); ?>
    </a>






    <div class="navbar-collapse" id="navbarSupportedContent">
        <!-- Right nav -->
        <ul class="navbar-nav right-nav ml-auto">
            <!-- Profile dropdown -->
            <li class="nav-item dropdown profile-nav-item">
                <a id='dropDownUser' class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="menu-profile">
                        <?php $userid = Yii::$app->user->id; $loggedUser = \common\models\User::findIdentity($userid) ?>
                        <span id="userLogged" class="name"><?= isset($loggedUser) ? $loggedUser->getFullName() : 'Guest' ?></span>
                        <i data-feather="user" class="icon"></i>
                    </div>
                </a>
                <div class="dropdown-menu">
                    <?= isset($loggedUser) ?
                        '<a class="dropdown-item" href="'.Yii::$app->request->baseUrl.'/site/profile'.'">
                            <i data-feather="user" class="icon"></i>
                            Profile
                        </a>' : ''
                    ?>
                    <?= !isset($loggedUser) ?
                        '<a id="btnSignup" class="dropdown-item" href="'.Yii::$app->request->baseUrl.'/site/signup'.'">
                            <i data-feather="user" class="icon"></i>
                            Registar
                        </a>' : ''
                    ?>
                    <a id="btnLogin" class="dropdown-item" href="<?= isset($loggedUser) ? Yii::$app->request->baseUrl.'/site/logout' :
                                                                            Yii::$app->request->baseUrl.'/site/login' ?>">
                        <i data-feather="<?= isset($loggedUser) ? 'log-out' : 'log-in' ?>" class="icon"></i>
                        <?= isset($loggedUser) ? 'Logout' : 'Login' ?>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
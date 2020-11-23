<?php
use yii\helpers\Html;
?>
<nav class="navbar navbar-expand fixed-top top-menu">

    <!-- Burger menu -->
    <div class="burger-menu toggle-menu">
        <span class="top-bar"></span>
        <span class="middle-bar"></span>
        <span class="bottom-bar"></span>
    </div>

    <!-- Nav Bar Logo -->
    <a class="navbar-brand" href="/">
        <!-- Large logo -->
        <?= Html::img('@web/images/large-logo.png', ['alt' => 'Logo', 'class' => 'large-logo']); ?>
        <?= Html::img('@web/images/small-logo.png', ['alt' => 'Logo', 'class' => 'small-logo']); ?>
    </a>






    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right nav -->
        <ul class="navbar-nav right-nav ml-auto">
            <!-- Email Notification dropdown -->
            <li class="nav-item dropdown message-box d-none d-sm-block">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="count-info">
                        <i data-feather="mail" class="icon"></i>
                        <span class="ci-number theme-bg">
                            <span class="ripple theme-bg"></span>
                            <span class="ripple theme-bg"></span>
                            <span class="ripple theme-bg"></span>
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="message-item">
                            <div class="user-pic">
                                <?= Html::img('@web/images/user/1.jpg', ['alt' => 'Profile', 'class' => 'rounded-circle']); ?>
                                <span class="profile-status online"></span>
                            </div>
                            <div class="chat-content">
                                <span class="message-title">Aaron Rossi</span>
                                <span class="mail-desc">Just sent a new comment!</span>
                            </div>
                            <span class="time">0 seconds ago</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="message-item">
                            <div class="user-pic">
                                <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User Image', 'class' => 'rounded-circle']); ?>
                                <span class="profile-status ofline"></span>
                            </div>
                            <div class="chat-content">
                                <span class="message-title">Marco Gomez</span>
                                <span class="mail-desc">Just sent a new comment!</span>
                            </div>
                            <span class="time">5 minutes ago</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="message-item">
                            <div class="user-pic">
                                <?= Html::img('@web/images/user/3.jpg', ['alt' => 'User Image', 'class' => 'rounded-circle']); ?>
                                <span class="profile-status away"></span>
                            </div>
                            <div class="chat-content">
                                <span class="message-title">Mitch Petty</span>
                                <span class="mail-desc">Just sent a new comment!</span>
                            </div>
                            <span class="time">9:00 AM</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        See all emails
                        <i data-feather="chevron-right" class="icon"></i>
                    </a>
                </div>
            </li>

            <!-- Message Notification dropdown -->
            <li class="message-box dropdown nav-item">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="count-info">
                        <i data-feather="bell" class="icon"></i>
                        <span class="ci-number">
                            <span class="ripple"></span>
                            <span class="ripple"></span>
                            <span class="ripple"></span>
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="message-item">
                            <div class="user-pic">
                                <?= Html::img('@web/images/user/4.jpg', ['alt' => 'User Image', 'class' => 'rounded-circle']); ?>
                                <span class="profile-status online"></span>
                            </div>
                            <div class="chat-content">
                                <span class="message-title">Aaron Rossi</span>
                                <span class="mail-desc">Just sent a new comment!</span>
                            </div>
                            <span class="time">0 seconds ago</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="message-item">
                            <div class="user-pic">
                                <?= Html::img('@web/images/user/5.jpg', ['alt' => 'User Image', 'class' => 'rounded-circle']); ?>
                                <span class="profile-status ofline"></span>
                            </div>
                            <div class="chat-content">
                                <span class="message-title">Marco Gomez</span>
                                <span class="mail-desc">Just sent a new comment!</span>
                            </div>
                            <span class="time">5 minutes ago</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="message-item">
                            <div class="user-pic">
                                <?= Html::img('@web/images/user/6.jpg', ['alt' => 'User Image', 'class' => 'rounded-circle']); ?>
                                <span class="profile-status away"></span>
                            </div>
                            <div class="chat-content">
                                <span class="message-title">Mitch Petty</span>
                                <span class="mail-desc">
                                    New order received!
                                    <span class="amount">$250</span>
                                </span>
                            </div>
                            <span class="time">9:00 AM - 02-02-2019</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        Check all notifications
                        <i data-feather="chevron-right" class="icon"></i>
                    </a>
                </div>
            </li>

            <!-- Profile dropdown -->
            <li class="nav-item dropdown profile-nav-item">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="menu-profile">
                        <?php $userid = Yii::$app->user->id; $loggedUser = \common\models\User::findIdentity($userid) ?>
                        <span class="name"><?= isset($loggedUser) ? $loggedUser->getFullName() : 'Guest' ?></span>
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
                        '<a class="dropdown-item" href="'.Yii::$app->request->baseUrl.'/site/signup'.'">
                            <i data-feather="user" class="icon"></i>
                            Registar
                        </a>' : ''
                    ?>
                    <a class="dropdown-item" href="<?= isset($loggedUser) ? Yii::$app->request->baseUrl.'/site/logout' :
                                                                            Yii::$app->request->baseUrl.'/site/login' ?>">
                        <i data-feather="<?= isset($loggedUser) ? 'log-out' : 'log-in' ?>" class="icon"></i>
                        <?= isset($loggedUser) ? 'Logout' : 'Login' ?>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
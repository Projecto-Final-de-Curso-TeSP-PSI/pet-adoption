<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use http\Url;
use kartik\sidenav\SideNav;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-static-top',
            ],
        ]);

        $menuItems = [
            [
                'label' => 'Home',
                'url' => ['/site/index']
            ],
        ];

        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>';
            }

        echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        ]);

    NavBar::end();
    ?>

    <div class="row">
        <div class="col-sm-2">

            <div class="sidebar-nav navbar-collapse">
                <div class="navbar-nav">

                    <?=  SideNav::widget([
                        'options'=> ['class' => 'sidebar-nav navbar-collapse' ],
                        'type' => SideNav::TYPE_DEFAULT,
                        'heading' => 'MENU',
                        'linkTemplate' => '<a href="{url}" title="{label}">{icon}<span class="nav-label">{label}</span></a>',
                        'items' => [
                            [
                                'url' => ['site/index'],
                                'label' => 'Admin',
                                'icon' => 'home'
                            ],
                            [
                                'url' => ['user/index'],
                                'label' => 'Utilizadores',
                                'icon' => 'align-right',
                            ],
                            [
                                'label' => 'Associações',
                                'icon' => 'question-sign',
                                'items' => [
                                    ['label' => 'Gerir Associações', 'icon'=>'info-sign', 'url'=>['organization/index']],
                                    ['label' => 'Pendentes aprovação', 'icon'=>'phone', 'url'=>['organization/approval-pending']],
                                ],
                            ],
                            [
                                'label' => 'Atributos Animal',
                                'icon' => 'question-sign',
                                'items' => [
                                    ['label' => 'Espécie', 'icon'=>'phone', 'url'=>['nature/index']],
                                    ['label' => 'Cor Pêlo', 'icon'=>'info-sign', 'url'=>['fur-color/index']],
                                    ['label' => 'Comprimento Pêlo', 'icon'=>'phone', 'url'=>['fur-length/index']],
                                    ['label' => 'Porte', 'icon'=>'phone', 'url'=>['size/index']],
                                ],
                            ],
                            [
                                'label' => 'Atributos Geográficos',
                                'icon' => 'question-sign',
                                'items' => [
                                    ['label' => 'Distrito', 'icon'=>'phone', 'url'=>['district/index']],
                                ],
                            ],
                        ]
                    ]); ?>

                </div>
            </div>

        </div>

        <div class="col-sm-10">

            <div class="container">
                <!-- Messages area -->
                <?= Yii::$app->view->renderFile('@frontend/views/layouts/partials/_messages.php'); ?>

                <?= $content ?>
            </div>

        </div>
    </div>



</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

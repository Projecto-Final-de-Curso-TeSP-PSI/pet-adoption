<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$reqUrl = Yii::$app->urlManager->parseRequest(Yii::$app->request);

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

<?php if (!($reqUrl[0] === "user/forgot-password" || $reqUrl[0] === "user/login" || $reqUrl[0] === "user/signup" || $reqUrl[0] === "page/error-404")): ?>
    <!-- Nav Bar -->
<?= Yii::$app->view->renderFile('@frontend/views/layouts/partials/_top-nav.php'); ?>

    <!-- Side Menu -->
<?= Yii::$app->view->renderFile('@frontend/views/layouts/partials/_sidemenu.php'); ?>

    <!-- Main Content Wrapper -->
<div class="main-content d-flex flex-column hide-sidemenu">
    <?php endif; ?>


    <?= $content ?>

    <?php if (!($reqUrl[0] === "user/forgot-password" || $reqUrl[0] === "user/login" || $reqUrl[0] === "user/signup" || $reqUrl[0] === "page/error-404")): ?>
    <!-- Footer -->
    <?= Yii::$app->view->renderFile('@frontend/views/layouts/partials/_footer.php'); ?>
</div>
    <!-- End Main Content Wrapper -->
<?php endif; ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

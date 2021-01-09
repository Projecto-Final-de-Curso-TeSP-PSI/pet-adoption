<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SignupForm */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = 'Registo de utilizador';
$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);
?>
<!-- Signup Area -->
<div class="auth-main-content auth-bg-image">
    <div class="d-table">
        <div class="d-tablecell">
            <div class="auth-box">
                <div class="row align-items-center">
                    <!--<div class="col-md-6">
                        <div class="form-left-content">
                            <div class="auth-logo">
                                <?/*= Html::img('@web/images/large-logo.png', ['alt' => 'Logo']); */?>
                            </div>

                            <div class="login-links">
                                <a class="fb" href="#">
                                    <i data-feather="facebook" class="icon"></i>
                                    Sign Up with Facebook
                                </a>
                                <a class="twi" href="#">
                                    <i data-feather="twitter" class="icon"></i>
                                    Sign Up with Twitter
                                </a>
                                <a class="ema" href="#">
                                    <i data-feather="mail" class="icon"></i>
                                    Sign Up with Email
                                </a>
                                <a class="linkd" href="#">
                                    <i data-feather="linkedin" class="icon"></i>
                                    Sign Up with Linkedin
                                </a>
                            </div>
                        </div>
                    </div>-->

                    <div class="col-md-6">
                        <div class="form-content">
                            <h1 class="heading"><?= Html::encode($this->title) ?></h1>
                            <p>Preencha o formulário para se registar.</p>

                            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                                <?= $form->field($model, 'firstName')?>
                                <?= $form->field($model, 'lastName')?>
                                <?= $form->field($model, 'nif') ?>
                                <?= $form->field($model, 'email') ?>
                                <?= $form->field($model, 'username') ?>
                                <?= $form->field($model, 'password')->passwordInput() ?>

                                <div class="form-group">
                                    <?= Html::submitButton('Registar', ['class' => 'btn btn-primary']) ?>
                                </div>
                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Signup Area -->
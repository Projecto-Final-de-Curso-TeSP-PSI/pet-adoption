<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use frontend\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
AppAsset::register($this);
?>
<!-- Login Area -->
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
                            </div>
                        </div>
                    </div>-->

                    <div class="col-md-6">
                        <div class="form-content">
                            <h1 class="heading">Log In</h1>
                            <div class="site-login">

                                <p>Autentique-se com nome de utilizador e password.</p>

                                <div class="row">
                                    <div class="col">
                                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                        <?= $form->field($model, 'password')->passwordInput() ?>

                                        <?= $form->field($model, 'rememberMe')->checkbox()->label('Lembrar-se de mim?') ?>

                                        <div class="form-group">
                                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                        </div>

                                        <div style="color:#999;margin:1em 0">
                                            Esqueceu-se da sua password? Pode redefini-la <?= Html::a('Aqui', ['site/request-password-reset']) ?>.
                                            <br>
                                            Precisa que lhe seja enviado um novo email de verificação? <?= Html::a('Reenviar', ['site/resend-verification-email']) ?>
                                        </div>

                                        <?php ActiveForm::end(); ?>

                                        <hr>

                                        <div class="form-group">
                                            <p style="color:#999;margin:1em 0">
                                                Ainda não tem conta? Registe-se!
                                            </p>

                                            <a href="/site/signup" class="btn btn-primary btn-redirect-to-signup">Registar</a>

                                        </div>

                                    </div>
                                </div>
                            </div>


<!--                            <form class="">
                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Log In</button>
                                    <a class="fp-link" href="/user/forgot-password">Forgot Password?</a>
                                </div>
                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Area -->
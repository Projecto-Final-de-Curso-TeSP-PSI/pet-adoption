<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-xl-6">
        <div class="card mb-30">
            <div class="card-body">
                <div class="card-header">
                    <h5 class="card-title"><?=$this->title?></h5>
                </div>

                <div class="site-login">
                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>Introduza o seu nome de utilizador e password para se autenticar.</p>

                    <div class="row">
                        <div class="col-lg-5">
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <?= $form->field($model, 'rememberMe')->checkbox()->label('Lembrar-se de mim?') ?>

                            <div style="color:#999;margin:1em 0">
                                Esqueceu-se da sua password? Pode redefini-la <?= Html::a('aqui', ['site/request-password-reset']) ?>.
                                <br>
                                Precisa que lhe seja enviado um novo email de verificação? <?= Html::a('Reenviar', ['site/resend-verification-email']) ?>
                            </div>

                            <div class="form-group">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


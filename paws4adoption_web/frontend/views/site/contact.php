<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contactar';
AppAsset::register($this);
?>
<div class="site-contact">
    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Envie um e-mail ao suporte.</p>

        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Nome') ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject')->label('Assunto') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Menssagem') ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])->label('Codigo de Verificação') ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

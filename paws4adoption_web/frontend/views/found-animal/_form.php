<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FoundAnimal */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-lg-12">
        <div class="profile-settings-form mb-30">
            <div class="userProfileForm">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>Encontrou um Animal?<br>Publique para que as outras pessoas possam ver e ajudar, e acionar um pedido de resgate as associações</p>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'id')->textInput() ?>

                <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'is_active')->checkbox() ?>

                <?= $form->field($model, 'found_date')->textInput() ?>

                <?= $form->field($model, 'priority')->dropDownList([ 'Alta' => 'Alta', 'Media' => 'Media', 'Baixa' => 'Baixa', 'Por classificar' => 'Por classificar', ], ['prompt' => '']) ?>

                <?= $form->field($model, 'user_id')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
                <p><b>Para editar ou eleminar uma publicação já feita aceda à </b><a href="<?= Yii::$app->request->baseUrl ?>/site/listAnimals"><b> Minha lista </a></a></p>
                <p><b>Aviso: </b> Quando salvar a publicação será enviado de imediato um pedido de resgate a algumas associações</p>

            </div><!-- userProfileForm -->
        </div>
    </div>
</div>


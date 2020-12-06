<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $animalModel common\models\Animal */
/* @var $missingAnimalModel common\models\MissingAnimal */
/* @var $form yii\widgets\ActiveForm */
/* @var $natureList */
/* @var $natureDog */
/* @var $natureCat */
/* @var $fulLength */
/* @var $fulColor */
/* @var $size */
/* @var $sex */
?>

<div class="row">
    <div class="col-lg-12">
        <div class="profile-settings-form mb-30">
            <div class="userProfileForm">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>O seu Animal desaparceu?<br>Publique para que as outras pessoas possam ter conhecimento</p>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($animalModel, 'name')->textInput(['placeholder' => 'Insere o nome']) ?>

                <?= $form->field($animalModel, 'chipId')->textInput(['placeholder' => 'Insere o Chip']) ?>

                <?= $form->field($animalModel, 'nature_id')->dropDownList($natureList, ['id' => 'nature-id']) ?>

                <?= $form->field($animalModel, 'nature_id')->dropDownList($natureCat, [ 'prompt' => 'Escolha a raça ']) ?>



                <?//= $form->field($animalModel, 'nature_id')->widget(DepDrop::classname(), [
                    //'id' => 'sub-nature-id',
                    //'pluginOptions' => [
                        //'depends' => ['nature-id'],
                        //'placeholder' => 'Select...',
                        //'url' => Url::to(['subnature']),
                    //],
                //]) ?>

                <?= $form->field($animalModel, 'sex')->dropDownList($sex, ['prompt' => 'Escolha o sexo']) ?>

                <?= $form->field($animalModel, 'fur_length_id')->dropDownList($fulLength, ['prompt' => 'Escolha o tamanho do pelo']) ?>

                <?= $form->field($animalModel, 'fur_color_id')->dropDownList($fulColor, ['prompt' => 'Escolha a cor do pelo']) ?>

                <?= $form->field($animalModel, 'size_id')->dropDownList($size, ['prompt' => 'Escolha o Porte']) ?>

                <?= $form->field($missingAnimalModel, 'missing_date')->widget(DatePicker::className(), [
                    'options' => ['placeholder' => 'dd/mm/aaaa'],
                    'pluginOptions' => ['autoclose' => true, 'format' => 'dd/mm/yyyy',],

                ]) ?>

                <?= $form->field($animalModel, 'description')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Publicar', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
                <p><b>Para editar ou eleminar uma publicação já feita aceda à </b><a
                            href="<?= Yii::$app->request->baseUrl ?>/site/my-list-animals"><b> Minha lista </a></a></p>

            </div><!-- userProfileForm -->
        </div>
    </div>
</div>
<!-- End Profile Settings -->


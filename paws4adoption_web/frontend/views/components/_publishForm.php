<?php

use common\models\District;
use frontend\assets\AppAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\form\ActiveForm;
use kartik\date\DatePicker;
use kartik\depdrop\DepDrop;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $addressModel common\models\Address */
/* @var $animalModel common\models\Animal */
/* @var $missingAnimalModel common\models\MissingAnimal */
/* @var $foundAnimalModel common\models\FoundAnimal */
/* @var $animalPhotoModel common\models\Photo */
/* @var $form yii\widgets\ActiveForm */
/* @var $natureList */
/* @var $natureDog */
/* @var $natureCat */
/* @var $fulLength */
/* @var $fulColor */
/* @var $size */
/* @var $sex */
/* @var $typeCreate */
/* @var $priority */


AppAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="profile-settings-form mb-30">
                <?php
                switch ($typeCreate) {
                    case 'createMissingAnimal':
                        echo "<h1>Pubicação Animal Desaparcido</h1>";
                        echo "<p>O seu Animal desaparceu?<br>Publique para que as outras pessoas possam ter conhecimento</p>";
                        break;
                    case 'createFoundAnimal':
                        echo "<h1>Pubicação Animal Errante</h1>";
                        echo "<p>Encontrou um animal?<br>Publique para que as outras pessoas possam ter conhecimento e ajudar</p>";
                        echo "<p>Quando uma publicação de animal errante é feita, será enviado um pedido de resgate para as associações do destrito onde foi avistado</p>";
                        break;
                    default:
                        break;

                }
                ?>
                <hr>
                <div class="userProfileForm">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                    <?= $form->field($animalModel, 'name')->textInput(['placeholder' => 'Insere o nome']) ?>

                    <?= $form->field($animalModel, 'chipId')->textInput(['placeholder' => 'Insere o Chip']) ?>

                    <?= $form->field($animalModel, 'nature_id')->dropDownList($natureList, ['id' => 'nature-id']) ?>

                    <?= $form->field($animalModel, 'nature_id')->dropDownList($natureCat, ['prompt' => 'Escolha a raça ']) ?>


                    <? //= $form->field($animalModel, 'nature_id')->widget(DepDrop::classname(), [
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
                    <?php
                    switch ($typeCreate) {
                        case 'createMissingAnimal':
                            echo $form->field($missingAnimalModel, 'missing_date')->widget(DatePicker::className(), [
                                'options' => ['placeholder' => 'dd/mm/aaaa'],
                                'pluginOptions' => ['autoclose' => true, 'format' => 'dd/mm/yyyy',],

                            ]);
                            break;
                        case 'createFoundAnimal':
                            echo $form->field($foundAnimalModel, 'found_date')->widget(DatePicker::className(), [
                                'options' => ['placeholder' => 'dd/mm/aaaa'],
                                'pluginOptions' => ['autoclose' => true, 'format' => 'dd/mm/yyyy',],

                            ]);

                            echo $form->field($addressModel, 'street');
                            echo $form->field($addressModel, 'city');
                            echo $form->field($addressModel, 'district_id')->dropDownList(District::getData(), ['prompt' => 'Escolha o Distrito']);
                            echo $form->field($foundAnimalModel, 'priority')->dropDownList($priority, ['prompt' => 'Escolha a prioridade de resgate']);

                            break;
                        default:
                            break;

                    }
                    ?>


                    <?= $form->field($animalModel, 'description')->textarea(['placeholder' => 'Insere informação que consideres relevantes a publicação.'], ['rows' => 3]) ?>

                    <?= $form->field($animalPhotoModel, 'imgPath')->widget(FileInput::classname(), [
                        'options' => ['accept' => 'image/*'],
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Publicar', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                    <hr>
                    <p><b>Para editar ou eleminar uma publicação já feita aceda à </b><a
                                href="<?= Yii::$app->request->baseUrl ?>/site/my-list-animals"><b> Minha lista </a></a>
                    </p>

                </div><!-- userProfileForm -->
            </div>
        </div>
    </div>
</div>
<!-- End Profile Settings -->


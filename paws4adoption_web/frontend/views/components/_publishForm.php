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
                        echo "<h1>Publicação de Animal Desaparcido</h1>";
                        echo "<p>O seu animal desaparceu?<br>Publique para que as outras pessoas possam ter conhecimento.</p>";
                        break;
                    case 'createFoundAnimal':
                        echo "<h1>Publicação de Animal Errante</h1>";
                        echo "<p>Encontrou um animal?<br>Publique para que as outras pessoas possam ter conhecimento e ajudar.</p>";
                        echo "<p>Quando uma publicação de animal errante é feita, será enviado um pedido de resgate para as associações do distrito onde foi avistado o animal.</p>";
                        break;
                    case 'createAdoptionAnimal':
                        echo "<h1>Publicação de Animal para Adopção </h1>";
                        break;
                }
                ?>
                <hr>
                <div class="CreateAnimalForm">
                    <?php $form = ActiveForm::begin([
                            'id' => 'createAnimal-form',
                            'options' => ['enctype' => 'multipart/form-data']]); ?>

                    <?= $form->field($animalModel, 'name',
                        [
                            'inputOptions' => ['id' => 'createFill-name']
                        ])->textInput(['placeholder' => 'Insere o nome']) ?>

                    <?= $form->field($animalModel, 'chipId',
                        [
                            'inputOptions' => ['id' => 'createFill-chipId']
                        ])->textInput(['placeholder' => 'Insere o Chip']) ?>

                    <?= $form->field($animalModel, 'nature_id',
                        ['inputOptions' => ['id' => 'createFill-nature', 'name' => 'nature']])
                        ->dropDownList($natureList, ['prompt' => 'Escolha a natureza'])
                        ->label('Espécie')?>

                    <?= $form->field($animalModel, 'nature_id',
                        ['inputOptions' => ['id' => 'createFill-breed']])
                        ->dropDownList($natureCat, ['prompt' => 'Escolha a raça '])
                        ->label('Raça de Gato')?>

                    <?= $form->field($animalModel, 'nature_id',
                        ['inputOptions' => ['id' => 'createFill-breed']])
                        ->dropDownList($natureDog, ['prompt' => 'Escolha a raça '])
                        ->label('Raça de Cão')?>

                    <? //= $form->field($animalModel, 'nature_id')->widget(DepDrop::classname(), [
                    //'id' => 'sub-nature-id',
                    //'pluginOptions' => [
                    //'depends' => ['nature-id'],
                    //'placeholder' => 'Select...',
                    //'url' => Url::to(['subnature']),
                    //],
                    //]) ?>

                    <?= $form->field($animalModel, 'sex',
                        [
                            'inputOptions' => ['id' => 'createFill-sex']
                        ])->dropDownList($sex, ['prompt' => 'Escolha o sexo']) ?>

                    <?= $form->field($animalModel, 'fur_length_id',
                        [
                            'inputOptions' => ['id' => 'createFill-furLength']
                        ])->dropDownList($fulLength, ['prompt' => 'Escolha o tamanho do pelo']) ?>

                    <?= $form->field($animalModel, 'fur_color_id',
                        [
                            'inputOptions' => ['id' => 'createFill-furColor']
                        ])->dropDownList($fulColor, ['prompt' => 'Escolha a cor do pelo']) ?>

                    <?= $form->field($animalModel, 'size_id',
                        [
                            'inputOptions' => ['id' => 'createFill-size']
                        ])->dropDownList($size, ['prompt' => 'Escolha o Porte']) ?>

                    <?php
                    switch ($typeCreate) {
                        case 'createMissingAnimal':
                            echo $form->field($missingAnimalModel, 'missing_date', ['inputOptions' => ['id' => 'createFill-missingDate']])->widget(DatePicker::className(), [
                                'options' => ['placeholder' => 'yyyy-mm-dd'],
                                'pluginOptions' => ['autoclose' => true, 'format' => 'yyyy-mm-dd',],

                            ]);
                            break;
                        case 'createFoundAnimal':
                            echo $form->field($foundAnimalModel, 'found_date', ['inputOptions' => ['id' => 'createFill-foundDate']])->widget(DatePicker::className(), [
                                'options' => ['placeholder' => 'aaaa/mm/dd'],
                                'pluginOptions' => ['autoclose' => true, 'format' => 'yyyy-mm-dd',],

                            ]);

                            echo $form->field($addressModel, 'street', ['inputOptions' => ['id' => 'createFill-street']]);
                            echo $form->field($addressModel, 'city', ['inputOptions' => ['id' => 'createFill-city']]);
                            echo $form->field($addressModel, 'district_id', ['inputOptions' => ['id' => 'createFill-district']])->dropDownList(District::getData(), ['prompt' => 'Escolha o Distrito']);
                            break;
                    }
                    ?>


                    <?= $form->field($animalModel, 'description',
                        [
                            'inputOptions' => ['id' => 'createFill-description']
                        ])->textarea(['placeholder' => 'Insere informação que consideres relevantes para a publicação.'], ['rows' => 3]) ?>

                    <?= $form->field($animalPhotoModel, 'imgPath',
                        [
                            'inputOptions' => ['id' => 'createFill-photo']
                        ])->widget(FileInput::classname(),
                        [
                            'options' => ['accept' => 'image/*'],
                        ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Publicar', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                    <hr>
                    <p><b>Para editar ou eliminar uma publicação já feita aceda à </b>
                        <a href="<?= Yii::$app->request->baseUrl ?>/site/my-list-animals"><b> Minha lista </a></a>
                    </p>

                </div><!-- userProfileForm -->
            </div>
        </div>
    </div>
</div>
<!-- End Profile Settings -->


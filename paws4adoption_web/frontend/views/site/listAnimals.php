<?php
use \yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$this->title = 'Nome da lista';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="body-content">

        <div >
            <!-- Imagem do animal -->
            <div><?= Html::img('../../assets/images/gato01.jpg')?>'</div>
            <!-- Informação dos animais -->
            <div>
                <p>Nome:</p><br>
                <p>Idade:</p><br>
                <p>Associação:</p>
                <!--Div Botoes Lista Adotar -->
                <div>
                    <input type="button" value="Adotar"/>
                    <input type="button" value="FAT"/>
                </div>
                <!--Div Botoes Lista Perdidos/Errantes -->
                <div>
                    <input type="button" value="Contactar"/>
                </div>
                <!--Div Botoes Lista Publicados por mim -->
                <div>
                    <input type="button" value="Eleminar"/>
                    <input type="button" value="Editar"/>
                </div>
            </div>
        </div>
    </div>
</div>
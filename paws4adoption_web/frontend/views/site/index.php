<?php
use \yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Paws4Adoption</h1>
    </div>
    <div class="body-content">
        <!-- Divs com informação sobre o projeto -->
        <div class="row">
            <div class="col-lg-6">
                <h2>Quem somos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
            </div>

            <div class="col-lg-6">
                <h2>O que consiste este site</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
            </div>
        </div>
        <!-- Divs com os animais em destaque -->
        <div >
            <h2>Destaques</h2>
            <!-- Div Cartão animais -->
            <div>
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
                </div>
            </div>
        </div>
    </div>
</div>

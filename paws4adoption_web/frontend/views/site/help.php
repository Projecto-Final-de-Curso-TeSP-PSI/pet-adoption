<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Como pode Ajudar?';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <!-- Faq accordion -->
                <div class="faq-accordion mb-30">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="lni-plus"></i>
                                Adotando um animal.
                            </a>
                            <div class="accordion-content">
                                A adoção é uma ótima maneira de ajudar tanto aos animais, pois ganham uma família onde
                                se sentem amados e protegidos, como as associações que infelizmente estão sempre lotadas
                                de animais e de pedidos de resgate.
                                Ao adotar a associação fica com espaço livre e pode ir resgatar outro animal que
                                necessite, desta forma a adoção cria um ciclo muito importante para a diminuição de
                                animais de rua.
                                <hr>
                                Para isso pode utilizar o nosso site para consultar os animais que estão disponíveis
                                para adoção e formalizar um pedido para esse efeito. Veja aqui a <a
                                        href="<?= Yii::$app->request->baseUrl ?>/adoption-animal"><b>lista de animais
                                        para adotar</b></a>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="lni-plus"></i>
                                Seja uma familia de acolhimento temporario
                            </a>
                            <div class="accordion-content">
                                Se querias ter um animal mas infelizmente não tens poder financeiro para o teres, as
                                famílias de acolhimento temporário pode ser a solução, sendo que normalmente quando este
                                tipo de "adoção" acontece, as associações ajudam com a ração e veterinário. Desta forma
                                ambos ficam a ganhar!
                                <hr>
                                <b>Veja as Vantagens:</b>
                                <ul>
                                    <li>Ao acolher um animal está ajudar a resolver o problema do abandono de animais e
                                        a sobrelotação das associações de defesa de animais
                                    </li>
                                    <li>As famílias de acolhimento temporário que recebem os animais não têm despesas
                                        com as necessidades básicas dos animais (alimentação, cuidados médicos) durante
                                        o tempo de acolhimento
                                    </li>
                                    <li>Ao acolher um animal, pode estar a ajudar a fazer ele sentir-se amado novamente,
                                        e ele irá ficar grato para o resto da vida
                                    </li>
                                </ul>
                                <hr>
                                Para isso entre em contacto com uma associação para que ela o possa orientar nesse
                                processo. Veja aqui a <a href="<?= Yii::$app->request->baseUrl ?>/organization"><b>lista
                                        de associações</b></a>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="lni-plus"></i>
                                Apadrinhar um animal
                            </a>
                            <div class="accordion-content">
                                Ama animais e quer ajudar um animal em particular, mas não pode adotar um animal por
                                algum motivo? O apadrinhamento é uma ajuda financeira destinada a um certo animal para o
                                ajudar com a sua alimentação, brinquedos e cuidados médicos. Desta forma pode ajudar um
                                animal a ter uma melhor qualidade de vida e ajudar com as despesas do animal, e por sua
                                vez ajudar com as despesas da associação, desta forma promove a sua adoção.
                                <hr>
                                Para isso entre em contacto com uma associação para que ela o possa orientar nesse
                                processo. Veja aqui a <a href="<?= Yii::$app->request->baseUrl ?>/organization"><b>lista
                                        de associações</b></a>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="lni-plus"></i>
                                Doações
                            </a>
                            <div class="accordion-content">
                                A doação ao contrario do apadrinhamento e feito a associação e não a um animal em
                                especifico. A doação pode ter vários formatos monetários, alimentação, produtos de
                                higiene para os animais, entre outros produtos que eles necessitam.
                                As doações são o grande sustento das associações de proteção de animais, sendo assim é a
                                forma onde estas vão buscar a maioria do dinheiro para se manterem operacionais e pagar
                                as contas necessárias. A doação é muito importante! Sem as doações as associações teriam
                                de fechar e os animais deixavam de ter para onde ir, voltando para a rua e para o
                                abandono.
                                <hr>
                                Veja aqui a <a href="<?= Yii::$app->request->baseUrl ?>/organization"><b>lista de
                                        associações</b></a> para poder fazer a sua doação.
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="lni-plus"></i>
                                Quero ser Voluntario
                            </a>
                            <div class="accordion-content">
                                O voluntariado, é principalmente o trabalho manual que uma associação necessita, desde
                                cuidar dos animais a limpar as suas casas, cuidados médicos, participação em campanhas.
                                <hr>
                                Para isso entre em contacto com uma associação para que ela o possa orientar nesse
                                processo. Veja aqui a <a href="<?= Yii::$app->request->baseUrl ?>/organization"><b>lista
                                        de associações</b></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




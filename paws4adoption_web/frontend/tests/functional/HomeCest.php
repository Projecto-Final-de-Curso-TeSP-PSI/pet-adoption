<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage(\Yii::$app->homeUrl);
        $I->see('Destaques', 'h2');
        $I->see('Animais para Adoção', 'a');
        $I->see('Animais Desaparcidos', 'a');
        $I->see('Animais Errantes', 'a');
        $I->see('No que Consiste o Site', 'div');
        $I->see('Este site foi desenvolvido como Projeto Final do Curso Tecnico Superior Profissional de Programação de Sistemas de Informação', 'p');
        $I->see('Ajudar', 'a');
    }

    public function seeFeatured(FunctionalTester $I){
        $I->amOnPage(\Yii::$app->homeUrl);
        $I->see('Destaques', 'h2');
        $I->see('Animais para Adoção', 'a');
        $I->see('Geraldina');
        $I->see('Animais Desaparcidos', 'a');
        $I->click('#linkMissingAnimal');
        $I->see('Fausto');
        $I->see('Animais Errantes', 'a');
        $I->click('#linkFoundAnimal');
        $I->see('Ambrosio');
    }
}
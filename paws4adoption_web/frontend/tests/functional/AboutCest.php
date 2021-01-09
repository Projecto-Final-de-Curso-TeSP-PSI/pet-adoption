<?php
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class AboutCest
{
    public function checkAbout(FunctionalTester $I)
    {
        $I->amOnRoute('site/help');
        $I->see('Como pode Ajudar?', 'h1');
        $I->see('Adotando um animal', 'a');
        $I->click('#help1');
        $I->see('A adoção é uma ótima maneira de ajudar tanto aos animais', '#helpText1');

        $I->see('Seja uma familia de acolhimento temporario', 'a');
        $I->click('#help2');
        $I->see('Se querias ter um animal mas infelizmente não tens poder financeiro para o teres', '#helpText2');

        $I->see('Apadrinhar um animal', 'a');
        $I->click('#help3');
        $I->see('Ama animais e quer ajudar um animal em particular', '#helpText3');

        $I->see('Doações', 'a');
        $I->click('#help4');
        $I->see('A doação ao contrario do apadrinhamento e feito a associação e não a um animal em especifico', '#helpText4');

        $I->see('Quero ser Voluntario', 'a');
        $I->click('#help5');
        $I->see('O voluntariado, é principalmente o trabalho manual que uma associação necessita', '#helpText5');
    }
}

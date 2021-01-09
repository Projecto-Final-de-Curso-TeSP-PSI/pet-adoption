<?php namespace backend\tests\acceptance;
use backend\tests\AcceptanceTester;
use Codeception\Step\Argument\PasswordArgument;
use Codeception\Util\Locator;

class SpeciesAttributeAdminOptionsCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->loginAs($I, 'simaopedro', new PasswordArgument('Sporting'), 'test then species attribute tag');
    }

    // tests
    public function addSpecie(AcceptanceTester $I)
    {
        $I->amGoingTo('add a new specie: Furão');
        $I->click('Atributos Animal');
        $I->see('Espécie');

        $I->click('Espécie');
        $I->wait('1');
        $I->see('Criar espécie');
        $I->see('Criar Sub-Espécie');

        $I->click('Criar Espécie');
        $I->wait('1');
        $I->see('Criar Espécie');
        $I->see('Cancelar');

        $I->fillField('Nature[name]', 'Furão');
        $I->click('Salvar');
        $I->wait(1);

        $I->see('Furão');

    }

    public function addSubSpecie(AcceptanceTester $I){
        $I->amGoingTo('add a new sub specie: Furão Asiático');
        $I->click('Atributos Animal');
        $I->see('Espécie');

        $I->click('Criar Sub-Espécie');
        $I->wait('1');
        $I->see('Criar Sub-Espécie');
        $I->see('Salvar');
        $I->see('Cancelar');

        $I->fillField('Nature[name]', 'Furão Asiático');
        $I->selectOption('#nature-parent_nature_id', 113);
        $I->click('Salvar');

        $I->wait(1);

        $I->see('Furão');
    }
}

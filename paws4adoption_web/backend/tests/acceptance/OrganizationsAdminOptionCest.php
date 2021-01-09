<?php namespace backend\tests\acceptance;
use backend\tests\AcceptanceTester;
use Codeception\Util\Locator;

class OrganizationsAdminOptionCest
{
    private $cookie = null;

    public function _before(AcceptanceTester $I){

        $I->loginAs($I, 'simaopedro', 'Sporting', 'test organizations tab');

    }


    public function blockOrganizationTest(AcceptanceTester $I)
    {
        $I->amGoingTo('block the Associação Zoófila Leiria');

        $I->click('Associações');
        $I->wait(1);
        $I->see('Gerir Associações');
        $I->see('Pendentes Aprovação');

        $I->click('Gerir Associações');

        $I->wait(1);
        $I->see('Organizações');

        $I->see('Ativo', Locator::find('tr' ,['data-key' => '3' ]));

        $I->click(Locator::find('a', ['href' => '/organization/block?id=3']));

        $I->wait(1);
        $I->see('Inativo', Locator::find('tr' ,['data-key' => '3' ]));

        $I->wait(1);
    }

    public function acceptOrganizationRequestTest(AcceptanceTester $I)
    {

        $I->amGoingTo('to accept an organization pending request');
        $I->click('Pendentes aprovação');

        $I->wait(1);
        $I->see('Organizações pendentes de aprovação');
        $I->see('Associação Zoófila Portuguesa');

        $I->click(Locator::find('a', ['href' => '/organization/approve-organization?id=6']));

        $I->wait(1);
        $I->dontSee('Associação Zoófila Portuguesa');

        $I->amGoingTo('check if the Associação Zoófila Leiria is now on the Gerir Associações tab');
        $I->click('Gerir Associações');

        $I->wait(1);
        $I->see('Organizações');
        $I->see('Associação Zoófila Portuguesa');

    }

}

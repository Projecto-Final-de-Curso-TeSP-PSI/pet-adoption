<?php namespace frontend\tests\acceptance;
use backend\tests\AcceptanceTester;
use Codeception\Util\Locator;

class OrganizationsAdminOptionCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/site/login');
        $I->amOnPage('/site/login');
        $I->see("Login");
        $I->fillField('Username', 'simaopedro');
        $I->fillField('Password', 'Sporting');
        $I->click('login-button');

        $I->wait(1);
        $I->see('Logout (simaopedro)', 'form button[type=submit]');

        $I->dontSeeLink('Login');

        $I->click('Associações');

        $I->wait(1);
        $I->see('Gerir Associações');
        $I->see('Pendentes Aprovação');

    }

    public function blockOrganization(AcceptanceTester $I)
    {
        $I->click('Gerir Associações');

        $I->wait(1);
        $I->see('Organizações');

        $I->click('Pendentes aprovação');
        $I->wait(1);

        $I->see('Organizações pendentes de aprovação');

        $I->see('Bloquear', Locator::find('tr' ,['data-key' => '3' ]));

        $I->click(Locator::find('a', ['href' => 'href="/organization/block?id=3"']));

        $I->see('Desbloquear', Locator::find('tr' ,['data-key' => '3' ]));

    }

    public function acceptOrganizationRequest(AcceptanceTester $I)
    {
        $I->click('Pendentes aprovação');

        $I->wait(1);
        $I->see('Organizações pendentes de aprovação');
        $I->see('Associação Zoófila Portuguesa');

        $I->click(Locator::find('a', ['href' => '/organization/approve-organization?id=6']));

        $I->wait(1);
        $I->dontSee('Associação Zoófila Portuguesa');


        $I->click('Gerir Associações');

        $I->wait(1);
        $I->see('Organizações');
        $I->see('Associação Zoófila Portuguesa');

    }

}

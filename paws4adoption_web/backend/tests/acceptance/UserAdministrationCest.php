<?php namespace frontend\tests\acceptance;


use backend\tests\AcceptanceTester;
use Codeception\Util\Locator;

class UserAdministrationCest
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
    }

    public function sidebarUsers(AcceptanceTester $I)
    {

        $I->click(Locator::find('a', ['href' => '/user/index']));
        $I->wait(1);
        $I->see('Users');
    }

    public function sidebarOrganization(AcceptanceTester $I)
    {

        $I->click('Associações');

        $I->click('Gerir Associações');
        $I->wait(1);
        $I->see('Organizações');

        $I->click('Pendentes aprovação');
        $I->wait(1);
        $I->see('Organizações pendentes de aprovação');
    }



}

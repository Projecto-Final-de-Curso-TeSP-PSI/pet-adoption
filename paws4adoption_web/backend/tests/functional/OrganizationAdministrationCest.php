<?php namespace frontend\tests\functional;
use backend\tests\FunctionalTester;

class OrganizationAdministrationCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('/site/login');
        $I->amOnPage('/site/login');
        $I->see("Login");
        $I->fillField('Username', 'simaopedro');
        $I->fillField('Password', 'Sporting');
        $I->click('login-button');

        $I->see('Logout (simaopedro)', 'form button[type=submit]');
        $I->dontSeeLink('Login');
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {

    }
}

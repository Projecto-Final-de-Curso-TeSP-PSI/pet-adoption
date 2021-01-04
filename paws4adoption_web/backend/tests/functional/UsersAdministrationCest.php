<?php namespace frontend\tests\functional;

use backend\tests\FunctionalTester;
use Codeception\Util\Locator;

class UsersAdministrationCest
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
    public function index(FunctionalTester $I)
    {
        //$I->click(Locator::find('a', ['href' => '/site/index']));
        $I->click('/user/index/', 'href');

        $I->see('Users');
    }
}

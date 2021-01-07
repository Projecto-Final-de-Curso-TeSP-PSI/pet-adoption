<?php namespace frontend\tests\acceptance;
use backend\tests\AcceptanceTester;
use Codeception\Util\Locator;

class UsersAdminOptionCest
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

        $I->click(Locator::find('a', ['href' => '/user/index']));
        $I->wait(1);
        $I->see('Users');
    }

    public function makeUserAdmin(AcceptanceTester $I){

        $I->dontSee('Tornar Admin', Locator::find('tr' ,['data-key' => '1' ]));
        $I->dontSee('Tornar Admin', Locator::find('tr' ,['data-key' => '2' ]));
        $I->see('Tornar Admin', Locator::find('tr' ,['data-key' => '3' ]));

        $I->click(Locator::find('a', ['href' => '/user/set-unset-admin?user_id=3']));
        $I->wait(1);

        $I->dontSee('Tornar Admin', Locator::find('tr' ,['data-key' => '1' ]));
        $I->dontSee('Tornar Admin', Locator::find('tr' ,['data-key' => '2' ]));
        $I->dontSee('Tornar Admin', Locator::find('tr' ,['data-key' => '3' ]));

    }

//    public function blockUser(AcceptanceTester $I){
//
//        $I->see('Ativo', Locator::find('tr' ,['data-key' => '1' ]));
//        $I->see('Ativo', Locator::find('tr' ,['data-key' => '2' ]));
//        $I->see('Inativo', Locator::find('tr' ,['data-key' => '3' ]));
//
//        $I->click('Bloquear', Locator::find('tr' ,['data-key' => '3' ]));
//        $I->wait(1);
//
//        $I->see('Ativo', Locator::find('tr' ,['data-key' => '1' ]));
//        $I->see('Ativo', Locator::find('tr' ,['data-key' => '2' ]));
//        $I->dontSee('Ativo', Locator::find('tr' ,['data-key' => '3' ]));
//
//        $I->see('Inativo', Locator::find('tr' ,['data-key' => '3' ]));
//
//    }

}

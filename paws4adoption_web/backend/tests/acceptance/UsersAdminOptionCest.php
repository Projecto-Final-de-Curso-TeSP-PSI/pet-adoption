<?php namespace back\tests\acceptance;
use backend\tests\AcceptanceTester;
use Codeception\Util\Locator;

class UsersAdminOptionCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->loginAs($I, 'simaopedro', 'Sporting', 'test the users tab');

        $I->click(Locator::find('a', ['href' => '/user/index']));
        $I->wait(1);
        $I->see('Users');
    }

    public function makeUserAdmin(AcceptanceTester $I){

        $I->click(Locator::find('a', ['href' => '/user/index']));
        $I->wait(1);
        $I->see('Users');

        $I->click('Utilizadores');

        $I->dontSee('Não', Locator::find('tr' ,['data-key' => '1' ]));
        $I->dontSee('Não', Locator::find('tr' ,['data-key' => '2' ]));
        $I->see('Não', Locator::find('tr' ,['data-key' => '3' ]));

        $I->click(Locator::find('a', ['href' => '/user/set-unset-admin?user_id=3']));
        $I->wait(1);

        $I->dontSee('Não', Locator::find('tr' ,['data-key' => '1' ]));
        $I->dontSee('Não', Locator::find('tr' ,['data-key' => '2' ]));
        $I->dontSee('Não', Locator::find('tr' ,['data-key' => '3' ]));

    }

    public function blockUser(AcceptanceTester $I){

        $I->click(Locator::find('a', ['href' => '/user/index']));
        $I->wait(1);
        $I->see('Users');

        $I->see('Ativo', Locator::find('tr' ,['data-key' => '1' ]));
        $I->see('Ativo', Locator::find('tr' ,['data-key' => '2' ]));
        $I->see('Ativo', Locator::find('tr' ,['data-key' => '4' ]));

        $I->see('Ativo', Locator::find('tr' ,['data-key' => '4' ]));
        $I->click(Locator::find('a', ['href' => '/user/block?id=4']));
        $I->wait(1);

        $I->see('Ativo', Locator::find('tr' ,['data-key' => '1' ]));
        $I->see('Ativo', Locator::find('tr' ,['data-key' => '2' ]));
        $I->see('Bloqueado', Locator::find('tr' ,['data-key' => '4' ]));

    }

}

<?php namespace frontend\tests\acceptance;
use Codeception\Util\Locator;
use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Login(AcceptanceTester $I)
    {
        $I->wantTo("test making a login");

        $I->amOnPage(Url::toRoute('/site/index'));
        $I->wait(2); // wait for page to be opened

        $I->see('No que consiste o site');

        $I->click(Locator::find('span', ['class' => 'name']));

        $I->see('LogIn', '#btnLogin');

        $I->click(Locator::find('a', ['href' => '/site/login']));
        $I->seeInCurrentUrl('/site/login');
        $I->see('Log In');


        $I->fillField('LoginForm[username]', 'simaopedro');
        $I->fillField('LoginForm[password]', 'Sporting');
        $I->click('login-button');

        $I->wait(1);
        $I->see('Simão Pedro');
    }
}

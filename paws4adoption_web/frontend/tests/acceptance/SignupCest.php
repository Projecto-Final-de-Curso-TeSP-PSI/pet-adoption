<?php namespace frontend\tests\acceptance;
use Codeception\Util\Locator;
use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class SignupCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo("test making a signup");

        $I->amOnPage('/site/index');
        $I->wait(2); // wait for page to be opened

        $I->see('No que consiste o site');
        $I->click(Locator::find('span', ['class' => 'name']));

        $I->see('Registar', '#btnSignup');


        $I->click(Locator::find('a', ['href' => '/site/signup']));
        $I->wait(1);

        $I->seeInCurrentUrl('/site/signup');
        $I->see('Registo de utilizador');

        $I->fillField('SignupForm[username]', 'catarina.cardoso');
        $I->fillField('SignupForm[email]', 'catarina.cardoso@trigenius.pt');
        $I->fillField('SignupForm[password]', 'Porto123#');
        $I->click(Locator::find('button', ['name' => 'login-button']));

        $I->wait(2);
        $I->seeInCurrentUrl('/');
        $I->seeInDatabase('users', ['username' => 'catarina.cardoso', 'email' => 'catarina.cardoso@trigenius.pt']);

    }
}

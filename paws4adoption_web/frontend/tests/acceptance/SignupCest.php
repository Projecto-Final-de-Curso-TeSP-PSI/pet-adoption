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

        $I->amOnPage(Url::toRoute('/site/index'));
        $I->wait(2); // wait for page to be opened

        $I->see('No que consiste o site');
        $I->click(Locator::find('span', ['class' => 'name']));

        $I->wait(1);
        $I->see('Registar');

        $I->click(Locator::find('a', ['href' => '/site/signup']));
        $I->wait(1);

        $I->seeInCurrentUrl('/site/signup');
        $I->see('Registo de utilizador');

        $I->fillField()

    }
}

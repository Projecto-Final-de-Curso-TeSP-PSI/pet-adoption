<?php
namespace frontend\tests\acceptance;

use Codeception\Util\Locator;
use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class HomeCest
{
    public function checkHome(AcceptanceTester $I)
    {


    }

    public function CheckSidebarLinks(AcceptanceTester $I){

        $I->amOnPage(Url::toRoute('/site/index'));
        $I->wait(2); // wait for page to be opened

        $I->see('No que consiste o site');

        $I->seeInSource('<span class="middle-bar"></span>');
        $I->click(Locator::find('span', ['class' => 'middle-bar']));
        //$I->click(['css' => '.middle-bar']);

        $I->click(Locator::find('a', ['href' => '/organization']));
        $I->see('Associações');

    }
}

<?php namespace frontend\tests\functional;
use backend\tests\FunctionalTester;

class OrganizationAdministrationCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage("/");
        $I->see("Login");
    }
}

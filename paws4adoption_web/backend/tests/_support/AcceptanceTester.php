<?php
namespace backend\tests;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     * @param $I
     */

    public function loginAs($I, $username, $password, $iAmGoingTo)
    {
        $I->amGoingTo($iAmGoingTo);

        // if snapshot exists - skipping login
        if ($I->loadSessionSnapshot('login')) return;

        // logging in
        $I->amOnPage('/site/login');
        $I->amOnPage('/site/login');
        $I->see("Login");
        $I->fillField('Username', $username);
        $I->fillField('Password', $password);
        $I->click('login-button');

        $I->wait(1);
        // saving snapshot
        $I->saveSessionSnapshot('login');
    }
}

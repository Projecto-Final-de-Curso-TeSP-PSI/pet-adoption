<?php

namespace backend\tests\functional;

use backend\tests\FunctionalTester;
use common\fixtures\UserFixture;

/**
 * Class LoginCest
 */
class LoginCest
{
    /**
     * Load fixtures before db transaction begin
     * Called in _before()
     * @see \Codeception\Module\Yii2::_before()
     * @see \Codeception\Module\Yii2::loadFixtures()
     * @return array
     */
    public function _fixtures()
    {
        return [
            'users' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'login_data.php'
            ]
        ];
    }

    public function _before(FunctionalTester $I){
        $I->amOnPage('/site/login');
        $I->amOnPage('/site/login');
        $I->see("Login");
    }
    
    /**
     * @param FunctionalTester $I
     */
    public function login(FunctionalTester $I)
    {
        $I->fillField('Username', 'simaopedro');
        $I->fillField('Password', 'Sporting');
        $I->click('login-button');

        $I->see('Logout (simaopedro)', 'form button[type=submit]');
        $I->dontSeeLink('Login');
    }

    public function incorrectLoginUser(FunctionalTester $I){
        $I->fillField('Username', 'simaopedroa');
        $I->fillField('Password', 'Sporting');
        $I->click('login-button');

        $I->see('Username ou password inválidos');
        $I->dontSee('Logout (simaopedro)');
    }

    public function loginWithNotAdminUser(FunctionalTester $I){
        $I->fillField('Username', 'patricia');
        $I->fillField('Password', 'Sporting');
        $I->click('login-button');

        $I->see('Acesso exclusivo para administradores');
        $I->dontSee('Logout (patricia)');
    }

    public function logout(FunctionalTester $I){
        $I->fillField('Username', 'simaopedro');
        $I->fillField('Password', 'Sporting');
        $I->click('login-button');

        $I->see('Logout (simaopedro)', 'form button[type=submit]');
        $I->dontSeeLink('Login');

        $I->click('logout-button');
        $I->see('Login');
    }
}

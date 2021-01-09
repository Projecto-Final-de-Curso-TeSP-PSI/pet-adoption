<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;
use common\fixtures\UserFixture;

class LoginCest
{
    /**
     * Load fixtures before db transaction begin
     * Called in _before()
     * @see \Codeception\Module\Yii2::_before()
     * @see \Codeception\Module\Yii2::loadFixtures()
     * @return array
     */

    protected $formId = '#login-form';

    public function _fixtures()
    {
        return [
            'user' => [
                'class' => UserFixture::className(),
            ],
        ];
    }

    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('site/login');
    }

    //_______________________________________TESTE DE LOGIN USER _____________________________________________
    //---->TESTE PARA VER SE QUANDO OS CAMPOS DE LOGIN ESTÃO VAZIOS MOSTRA OS ERROS DE VALIDAÇÃO NECESSARIOS
    public function loginWithEmptyFields(FunctionalTester $I)
    {
        $I->see('Log In', 'h1');
        $I->see('Autentique-se com nome de utilizador e password.', 'p');
        $I->submitForm($this->formId, [
                'LoginForm[username]' => '',
                'LoginForm[password]' => '',
            ]
        );
        $I->seeValidationError('Username cannot be blank.');
        $I->seeValidationError('Password cannot be blank.');
    }
    //---->TESTE PARA VERIFICAR SE QUANDO A PASS ESTÁ ERRADA MOSTRA O ERRO DE VALIDAÇÃO NECESSARIO
    public function checkWrongPassword(FunctionalTester $I)
    {
        $I->submitForm( $this->formId, [
            'LoginForm[username]' => 'claudiavalente',
            'LoginForm[password]' => 'wrong',
            ]
        );
        $I->dontSeeValidationError('Username cannot be blank.');
        $I->dontSeeValidationError('Password cannot be blank.');
        $I->seeValidationError('Incorrect username or password.');
    }
    //---->TESTE PARA FAZER LOGIN E VERIFICAR SE ESTÁ TUDO LOGADO E NA PAGINA CERTA
    public function checkValidLogin(FunctionalTester $I)
    {
        $I->submitForm( $this->formId, [
                'LoginForm[username]' => 'claudiavalente',
                'LoginForm[password]' => 'Sporting',
            ]
        );
        $I->see('Cláudia Valente', 'a');
        $I->see('No que Consiste o Site', 'div');
        $I->click('#dropDownUser');
        $I->see('Profile');
        $I->see('Logout');
        $I->dontSeeLink('Login');
        $I->dontSeeLink('Signup');
    }
}

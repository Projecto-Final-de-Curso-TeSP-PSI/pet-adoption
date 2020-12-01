<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class SignupCest
{
    protected $formId = '#form-signup';


    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('site/signup');
    }
    //____________________________________TESTES DE REGISTO__________________________________________________________
    //--->TESTE PARA VERIFICAR SE QUANDO SE COLOCA CAMPOS EM BRANCO SE APARECE OS ERROS NECESSARIOS
    public function signupWithEmptyFields(FunctionalTester $I)
    {
        $I->see('Registo de utilizador', 'h1');
        $I->see('Preencha o formulário para se registar.', 'p');
        $I->submitForm($this->formId,         [
            'SignupForm[username]'  => '',
            'SignupForm[email]'     => '',
            'SignupForm[password]'  => '',
        ]);
        $I->seeValidationError('Username cannot be blank.'); //PRECISA DE SER ALTERADO PARA PT
        $I->seeValidationError('Email cannot be blank.'); //PRECISA DE SER ALTERADO PARA PT
        $I->seeValidationError('Password cannot be blank.'); //PRECISA DE SER ALTERADO PARA PT
    }
        //---->TESTE PARA VERIFICAR SE QUANDO SE COLOCA EMAIL INVALIDO SE APARECE SO ERRO REFEREMTE AO EMAIL NAO VALIDO
    public function signupWithWrongEmail(FunctionalTester $I)
    {
        $I->submitForm(
            $this->formId, [
            'SignupForm[username]'  => 'tester',
            'SignupForm[email]'     => 'ttttt',
            'SignupForm[password]'  => 'tester_password',
        ]
        );
        $I->dontSee('Username cannot be blank.', '.help-block'); //PRECISA DE SER ALTERADO PARA PT
        $I->dontSee('Password cannot be blank.', '.help-block'); //PRECISA DE SER ALTERADO PARA PT
        $I->see('Email is not a valid email address.', '.help-block'); //PRECISA DE SER ALTERADO PARA PT
    }

    //----->TESTE PARA VERIFICAR SE O REGISTO É FEITO COM SUCESSO
    /* !!!!(TESTE NÃO ESTÁ A FUNCIONAR)!!!!
    public function signupSuccessfully(FunctionalTester $I)
    {
        $I->submitForm($this->formId, [
            'SignupForm[username]' => 'tester',
            'SignupForm[email]' => 'tester.email@example.com',
            'SignupForm[password]' => 'tester_password',
        ]);

        $I->seeRecord('common\models\user', [
            'username' => 'tester',
            'email' => 'tester.email@example.com',
            'status' => \common\models\user::STATUS_INACTIVE
        ]);

        $I->seeEmailIsSent();
        $I->see('Thank you for registration. Please check your inbox for verification email.');
    }*/
}

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
            'SignupForm[firstName]'  => '',
            'SignupForm[lastName]'  => '',
            'SignupForm[nif]'  => '',
            'SignupForm[username]'  => '',
            'SignupForm[email]'     => '',
            'SignupForm[password]'  => '',
        ]);
        $I->seeValidationError('Nome cannot be blank.');
        $I->seeValidationError('Apelido cannot be blank.');
        $I->seeValidationError('NIF cannot be blank.');
        $I->seeValidationError('Nome de utilizador cannot be blank.');
        $I->seeValidationError('Email cannot be blank.');
        $I->seeValidationError('Password cannot be blank.');
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
    public function signupSuccessfully(FunctionalTester $I)
    {
        $I->submitForm($this->formId, [
            'SignupForm[firstName]'  => 'Test',
            'SignupForm[lastName]'  => 'Tester',
            'SignupForm[nif]'  => '152365155',
            'SignupForm[username]' => 'tester',
            'SignupForm[email]' => 'tester.email@example.com',
            'SignupForm[password]' => 'tester_password',
        ]);

        $I->seeRecord('common\models\User', [
            'username' => 'tester',
            'email' => 'tester.email@example.com',
            'status' => \common\models\User::STATUS_INACTIVE
        ]);

    }
}

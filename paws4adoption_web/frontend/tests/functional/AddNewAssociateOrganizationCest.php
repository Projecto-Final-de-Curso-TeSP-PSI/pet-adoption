<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class AddNewAssociateOrganizationCest
{
    protected $formId = '#login-form';

    public function _before(FunctionalTester $I)
    {

    }

    // tests
    public function testSetNewCandidate(FunctionalTester $I)
    {
        $I->amOnRoute('site/login');
        $I->see('Log In', 'h1');
        $I->see('Autentique-se com nome de utilizador e password.', 'p');
        $I->submitForm( $this->formId, [
                'LoginForm[username]' => 'joao',
                'LoginForm[password]' => 'Sporting',
            ]
        );

        $I->see('Joao Mendes', 'a');

        $I->amOnPage('associated-user-request/create');
        $I->see('Candidatura a Voluntário');

        $I->selectOption('AssociatedUserRequest[organization_id]', 3);
        $I->fillField('AssociatedUserRequest[motivation]', 'Quero ajudar os gatos');
        $I->click('Save');

        $I->see('Pedido de voluntariado registado');

    }

    public function testAddNewCandidate(FunctionalTester $I){
        $I->amOnRoute('site/login');
        $I->see('Log In', 'h1');
        $I->see('Autentique-se com nome de utilizador e password.', 'p');
        $I->submitForm( $this->formId, [
                'LoginForm[username]' => 'zemigas',
                'LoginForm[password]' => 'Sporting',
            ]
        );
        $I->see('José Miguel', 'a');


        $I->amOnPage('/organization/associate-manage');
        $I->pause();
        $I->see('Gestão Utilizadores Associação');

        $I->click('a', '#btnAddNewAssociates');
        $I->pause();

        $I->see('Joao Mendes');
//        $I->click('Aprovar');

//        $I->canSee('Associado adicionado com sucesso');

//        $I->click('#btnReturn');
//        //$I->amOnPage('/organization/associate-manage');
//
//        $I->pause();
//        $I->canSee('Joao Mendes');
    }
}

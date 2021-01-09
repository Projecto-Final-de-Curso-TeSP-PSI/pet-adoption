<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;
use yii\bootstrap\Button;

class PublishAnimalCest
{

    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('site/login');
    }

    // fazer login com o utilizador valido
    public function trySubmitMissingAnimalEmptyFields(FunctionalTester $I)
    {
        $I->submitForm( '#login-form', [
                'LoginForm[username]' => 'claudiavalente',
                'LoginForm[password]' => 'Sporting',
            ]
        );
        $I->see('Cláudia Valente', 'a');
        $I->see('No que Consiste o Site', 'div');
        $I->click('#sideMenuBurguer');
        $I->see('Publicar');
        $I->click('#menuPublish');
        $I->click('#menuPublishMissingAnimal');
        $I->see('Publicação de Animal Desaparcido', 'h1');


        $I->fillField('#createFill-name', '');
        $I->fillField('#createFill-chipId', '');

        $I->fillField('#createFill-missingDate', '');
        $I->fillField('#createFill-description', '');

        $I->click('Publicar', 'button');

        $I->seeValidationError('Nome cannot be blank.');
        $I->seeValidationError('Raça cannot be blank.');
        $I->seeValidationError('Sexo cannot be blank.');
        $I->seeValidationError('Tamanho do pêlo cannot be blank.');
        $I->seeValidationError('Cor do pêlo cannot be blank.');
        $I->seeValidationError('Porte cannot be blank.');
    }
    public function submitMissingAnimal(FunctionalTester $I)
    {
        $I->submitForm( '#login-form', [
                'LoginForm[username]' => 'claudiavalente',
                'LoginForm[password]' => 'Sporting',
            ]
        );
        $I->see('Cláudia Valente', 'a');
        $I->see('No que Consiste o Site', 'div');
        $I->click('#sideMenuBurguer');
        $I->see('Publicar');
        $I->click('#menuPublish');
        $I->click('#menuPublishMissingAnimal');
        $I->see('Publicação de Animal Desaparcido', 'h1');

        $I->fillField('#createFill-name', 'Foo');
        $I->fillField('#createFill-chipId', '1632665966556');

        $I->selectOption("Animal[sex]", 'Macho');
        $I->seeInField("#createFill-sex", 'Macho');

        $I->selectOption("Animal[fur_length_id]", 'Curto');
        $I->seeInField("#createFill-furLength", 'Curto');

        $I->selectOption("Animal[size_id]", 'Pequeno');
        $I->seeInField("#createFill-size", 'Pequeno');

        $I->selectOption("Animal[fur_color_id]", 'Branco');
        $I->seeInField("#createFill-furColor", 'Branco');



        $I->selectOption("Animal[nature_id]", 'Asian');
        $I->seeInField("#createFill-nature", 'Asian');

        $I->fillField('#createFill-missingDate', '10/10/2020');
        $I->fillField('#createFill-description', '');



        $I->attachFile('#createFill-photo', 'testImg.jpg');

        $I->click('Publicar', 'button');
    }



}

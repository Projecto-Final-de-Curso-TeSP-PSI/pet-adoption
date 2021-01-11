<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class GuestRoutesCest
{
    public function checkHome(FunctionalTester $I)
    {
        $I->amOnPage(\Yii::$app->homeUrl);
        $I->see('Destaques', 'h2');
    }
    public function checkCreateMissingAnimal(FunctionalTester $I)
    {
        $I->amOnPage('missing-animal/create');
        $I->dontSee('Publicação de Animal Desaparcido', 'h1');
        $I->see('Log in', 'h1');
    }
    public function checkMyList(FunctionalTester $I)
    {
        $I->amOnPage('site/my-list-animals');
        $I->dontSee('Minha Lista', 'h1');
        $I->see('Log in', 'h1');
    }
    public function checkAnimalsOrganization(FunctionalTester $I)
    {
        $I->amOnPage('adoption-animal/my-org-adoption-animals');
        $I->dontSee('Animais para adotar na minha associação', 'h1');
        $I->see('Forbidden (#403)', 'h1');
    }




}
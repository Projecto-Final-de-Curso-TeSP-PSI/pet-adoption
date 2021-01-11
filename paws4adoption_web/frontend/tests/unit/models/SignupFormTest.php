<?php
namespace frontend\tests\unit\models;

use common\fixtures\UserFixture;
use frontend\models\SignupForm;

class SignupFormTest extends \Codeception\Test\Unit
{
    
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;
    protected $auth;

    public function _before()
    {
        $this->tester->haveFixtures([
            'users' => [
                'class' => UserFixture::className(),
//                var_dump(codecept_data_dir());
            ]
        ]);



    }

    public function testCorrectSignup()
    {
        $model = new SignupForm([
            'firstName' => 'some',
            'lastName' => 'name',
            'nif' => '125236254',
            'username' => 'some_username',
            'email' => 'some_email@example.com',
            'password' => 'some_password',
        ]);

//        echo ' asdfasdf' . $this->auth->getRole('user'); die;

        $this->auth = \Yii::$app->authManager;
        $userRole = $this->auth->createRole('user');
        $this->auth->add($userRole);

        $user = $model->signup();
        expect($user)->true();

        /** @var \common\models\user $user */
        $user = $this->tester->grabRecord('common\models\user', [
            'firstName' => 'some',
            'lastName' => 'name',
            'nif' => '125236254',
            'username' => 'some_username',
            'email' => 'some_email@example.com',
            'status' => \common\models\user::STATUS_INACTIVE
        ]);

        $this->tester->seeEmailIsSent();

        $mail = $this->tester->grabLastSentEmail();

        expect($mail)->isInstanceOf('yii\mail\MessageInterface');
        expect($mail->getTo())->hasKey('some_email@example.com');
        expect($mail->getFrom())->hasKey(\Yii::$app->params['supportEmail']);
        expect($mail->getSubject())->equals('Account registration at ' . \Yii::$app->name);
        expect($mail->toString())->stringContainsString($user->verification_token);
    }

    public function testNotCorrectSignup()
    {
        $model = new SignupForm([
            'firstName' => 'Troy',
            'lastName' => 'Becker',
            'nif' => '357864922',
            'username' => 'troy.becker',
            'email' => 'nicolas.dianna@hotmail.com',
            'password' => 'some_password',
        ]);

        expect_not($model->signup());
        expect_that($model->getErrors('username'));
        expect_that($model->getErrors('email'));

        expect($model->getFirstError('username'))
            ->equals('This username has already been taken.');
        expect($model->getFirstError('email'))
            ->equals('This email address has already been taken.');
    }
}

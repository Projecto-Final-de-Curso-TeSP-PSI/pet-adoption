<?php namespace common\tests;

use common\fixtures\UserFixture;
use common\models\Animal;
use common\models\User;
use yii\base\NotSupportedException;
use function Symfony\Component\String\u;

class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var \common\tests\UnitTester
     */
    protected $tester;


    protected function _before()
    {
        $this->tester->haveFixtures([
            'user' => [
                'class' => UserFixture::className(),
                //'dataFile' => codecept_data_dir() . 'user.php'
            ]
        ]);
    }

    protected function _after()
    {
    }

    // tests
    public function testValidation()
    {
        $user = new User();

        // Assings all fields with null value
        foreach ($user->attributes() as $attribute){
            $user->$attribute = null;
        }
        // And checks all the fields that shouldn't be null
        $this->assertFalse($user->validate([
            'firstName', 'lastName', 'email', 'nif', 'username',
            'auth_key', 'password_hash', 'created_at', 'updated_at']));


        // Assings all fields with an extremely long string
        foreach ($user->attributes() as $attribute){
            $user->$attribute = 'toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty';
        }
        $this->assertFalse($user->validate([
            'firstName', 'lastName', 'nif', 'phone', 'username',
            'password_hash', 'password_reset_token', 'verification_token']));


        // Assings all fields with an int value
        foreach ($user->attributes() as $attribute){
            $user->$attribute = 10;
            echo $attribute . ': ' . $user->$attribute;
        }


        $this->assertFalse($user->validate([
            'firstName', 'lastName', 'nif', 'phone', 'username',
            'password_hash', 'password_reset_token', 'verification_token']));

        $this->assertTrue($user->validate(['status', 'created_at', 'updated_at', 'address_id']));

    }
}
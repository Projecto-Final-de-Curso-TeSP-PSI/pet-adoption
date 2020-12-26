<?php namespace common\tests;

use \Codeception\Specify;
use common\fixtures\OrganizationFixture;
use common\models\Organization;


class OrganizationTest extends \Codeception\Test\Unit
{

    /**
     * @var \common\tests\UnitTester $tester
     * @var \common\models\Organization $organization
     */

    protected $organization1;
    protected $organization2;

    protected $tester;

    public function _fixtures(){



    }

    protected function _before()
    {

        $this->tester->haveFixtures([
            'organization' => [
                'class' => OrganizationFixture::className(),
                // fixture data located in tests/_data/user.php
                'dataFile' => codecept_data_dir() . 'organization.php'
            ]
        ]);

        $this->organization1 = new \common\models\Organization();
        $this->organization2 = new \common\models\Organization();

    }

    protected function _after()
    {

    }

    /** @test */
    public function required_fields(){

        foreach ($this->organization1->attributes as $attribute){
            $attribute = null;
        }

        $this->assertFalse($this->organization1->validate(['name']));
        $this->assertFalse($this->organization1->validate(['nif']));

        //$this->assertFalse($this->organization1->validate(['address_id']));

        $this->assertTrue($this->organization1->validate(['phone', 'status', 'email', 'address_id']));

    }

    /** @test */
    public function max_size_fields(){

        $this->organization1->name   = '1234567890123456789012345678901234567890123456789012345678901234';
        $this->organization1->email  = '1234567890123456789012345678901234567890123456789012345678901234';
        $this->assertTrue($this->organization1->validate(['name']));
        $this->assertTrue($this->organization1->validate(['name']));

        $this->organization1->name   = '12345678901234567890123456789012345678901234567890123456789012345';
        $this->organization1->email  = '12345678901234567890123456789012345678901234567890123456789012345';
        $this->assertFalse($this->organization1->validate(['name']));
        $this->assertFalse($this->organization1->validate(['email']));

        $this->organization1->nif    = '123456789';
        $this->organization1->phone  = '123456789';
        $this->assertTrue($this->organization1->validate(['nif']));
        $this->assertTrue($this->organization1->validate(['phone']));

        $this->organization1->nif    = '1234567890';
        $this->organization1->phone  = '1234567890';
        $this->assertFalse($this->organization1->validate(['nif']));
        $this->assertFalse($this->organization1->validate(['phone']));

     }

    /** @test */
    public function unique_fields(){

        $this->tester->haveFixtures([
            'organization' => [
                'class' => OrganizationFixture::className(),
                // fixture data located in tests/_data/user.php
                'dataFile' => codecept_data_dir() . 'organization.php'
            ]
        ]);


        $organization1 = $this->tester->grabFixture('organization', 'organization1');
        $organization2 = $this->tester->grabFixture('organization', 'organization2');

        $organization2->nif = 505126580;

        //$this->assertFalse($organization2->validate());
        $this->assertEquals('505126580', $organization2->nif);


    }

    public function name(){



    }


//    public function testAddressIdIsValid(){
//
////    //Assert that address id doesn't exist
////    $this->organization1->address_id = 1;
////    $this->assertFalse($this->organization1->validate(['address_id']));
////
////    //Assert that address id does exist
////    $this->organization2->address_id = 2;
////    $this->assertTrue($this->organization1->validate(['address_id']));
//
//    }

    public function testFieldsLength(){

        $this->organization1->name = '1234567890123456789012345678901234567890123456789012345678912345';
        $this->assertTrue($this->organization1->validate(['name']));

        $this->organization1->name = '12345678901234567890123456789012345678901234567890123456789123456';
        $this->assertFalse($this->organization1->validate(['name']));

        $this->organization1->email = '123456789012345678901234567890123456789012345678901234567891234';
        $this->assertTrue($this->organization1->validate(['email']));

        $this->organization1->email = '12345678901234567890123456789012345678901234567890123456789123456';
        $this->assertFalse($this->organization1->validate(['email']));

        $this->organization1->nif = '123456789';
        $this->assertTrue($this->organization1->validate(['nif']));

        $this->organization1->nif = '1234567890';
        $this->assertFalse($this->organization1->validate(['nif']));

    }

    public function testFieldsAreCorrectlyInserted(){

        $this->organization1 = $this->tester->grabFixture('organization', 'organization1');
        $this->organization2 = $this->tester->grabFixture('organization', 'organization2');

        //$this->organization1->address_id = 1;

        $this->assertEquals('Associação Zoófila Leiria', $this->organization1->name);
        $this->assertEquals( '505126580', $this->organization1->nif);
        $this->assertEquals( 'azl@gmail.com', $this->organization1->email);
        $this->assertEquals(912356896, $this->organization1->phone);
        $this->assertEquals(1, $this->organization1->address_id);
        $this->assertEquals(\common\models\Organization::ACTIVE, $this->organization1->status);

        $this->assertTrue($this->organization1->validate(['name']));
        $this->assertTrue($this->organization1->validate(['nif']));
        $this->assertTrue($this->organization1->validate(['phone']));
        //$this->assertTrue($this->organization1->validate(['address_id']));
        $this->assertTrue($this->organization1->validate(['status']));

        //$this->assertTrue($this->organization1->validate());

    }

}
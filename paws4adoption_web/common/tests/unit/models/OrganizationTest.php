<?php namespace common\tests;

use \Codeception\Specify;
use common\fixtures\OrganizationFixture;
use common\models\Organization;


class OrganizationTest extends \Codeception\Test\Unit
{

    /**
     * @var \common\tests\UnitTester $tester
     * @var Organization $organization
     */

    protected $organization1;
    protected $organization2;
    protected $organization3;


    protected $tester;

    protected function _before()
    {

        $this->tester->haveFixtures([
            'organization' => [
                'class' => OrganizationFixture::className(),
            ]
        ]);

        $this->organization1 = new Organization();
        $this->organization2 = new Organization();
        $this->organization3 = new Organization();

    }

    protected function _after()
    {

    }

    /** @test */
    public function required_fields(){

        foreach ($this->organization1->attributes as $attribute){
            $attribute = null;
            echo  $attribute;
        }

        //Fields that cannot be null
        $this->assertFalse($this->organization1->validate(['name', 'nif', 'email', 'phone', 'address_id', 'founder_id']));

        //Fields that can be null
        $this->assertTrue($this->organization1->validate(['status']));

    }

    /** @test */
    public function max_size_fields(){

        //Fields with correct maximum size
        $this->organization1->name   = '1234567890123456789012345678901234567890123456789012345678901234';
        $this->organization1->email  = '1234567890123456789012345678901234567890123456789012345678901234';
        $this->organization1->nif    = '123456789';
        $this->organization1->phone  = '123456789';

        $this->assertTrue($this->organization1->validate(['name']));
        $this->assertTrue($this->organization1->validate(['name']));
        $this->assertTrue($this->organization1->validate(['nif']));
        $this->assertTrue($this->organization1->validate(['phone']));


        //Fields with wrong maximum size
        $this->organization1->name   = '12345678901234567890123456789012345678901234567890123456789012345';
        $this->organization1->email  = '12345678901234567890123456789012345678901234567890123456789012345';
        $this->organization1->nif    = '1234567890';
        $this->organization1->phone  = '1234567890';

        $this->assertFalse($this->organization1->validate(['name']));
        $this->assertFalse($this->organization1->validate(['email']));
        $this->assertFalse($this->organization1->validate(['nif']));
        $this->assertFalse($this->organization1->validate(['phone']));
     }

    /** @test */
    public function unique_fields(){

        $organization1 = $this->tester->grabFixture('organization', 'organization1');
        $organization2 = $this->tester->grabFixture('organization', 'organization2');

        $organization2->nif = 505126580;

        //Organization with the same Nif
        $this->assertFalse($organization2->validate());

        $this->assertEquals('505126580', $organization2->nif);

    }

    public function testAddressIdIsValid(){

    //Assert that address id doesn't exist
    $this->organization1->address_id = 4;
    $this->assertFalse($this->organization1->validate(['address_id']));

    //Assert that address id does exist
    $this->organization2->address_id = 3;
    $this->assertTrue($this->organization2->validate(['address_id']));

    }

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
        $this->organization3 = $this->tester->grabFixture('organization', 'organization3');

        $this->assertEquals('Associação Zoófila Leiria', $this->organization1->name);
        $this->assertEquals( '505126580', $this->organization1->nif);
        $this->assertEquals( 'azl@gmail.com', $this->organization1->email);
        $this->assertEquals(912356896, $this->organization1->phone);
        $this->assertEquals(1, $this->organization1->address_id);
        $this->assertEquals(Organization::STATUS_ACTIVE, $this->organization1->status);

        $this->assertTrue($this->organization1->validate(), json_encode($this->organization1->errors));
        $this->assertTrue($this->organization2->validate(), json_encode($this->organization2->errors));
        $this->assertTrue($this->organization3->validate(), json_encode($this->organization3->errors));

    }
}

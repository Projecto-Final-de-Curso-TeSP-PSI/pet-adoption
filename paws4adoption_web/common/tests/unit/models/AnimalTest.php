<?php namespace common\tests;

use common\fixtures\AnimalFixture;
use common\fixtures\UserFixture as UserFixture;
use common\models\Animal;
use function GuzzleHttp\Promise\all;

class AnimalTest extends \Codeception\Test\Unit
{
    /**
     * @var \common\tests\UnitTester
     */
    protected $tester;

    public function _before()
    {
        $this->tester->haveFixtures([
            'animals' => [
                'class' => AnimalFixture::className(),
            ]
        ]);
    }

    protected function _after()
    {
    }

    // tests
    public function testValidationsAnimal()
    {
        //cria novo animal
        $animal = new Animal();

        //Preenche todos os atributos a vazio
        foreach ($animal->attributes() as $attribute){
            $animal->$attribute = null;
        }

        //Verifica todos os campos que nao devem aceitar null
        $this->assertFalse($animal->validate(
            ['nature_id', 'fur_length_id', 'fur_color_id', 'size_id', 'sex', 'createAt']
        ));

        //Verifica todos os campos que podem levar null
        $this->assertTrue($animal->validate(
            ['chipId', 'description']
        ));

        //Preenche todos os atributos com uma long string
        foreach ($animal->attributes() as $attribute){
            $animal->$attribute = 'toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty
                                 toolooooongnaaaaaaameeeeqwertyqwertyqwertyqwertyqwerty';
        }
        //Verifica se todos os campos arrebetam tanto porque nao levam string como porque o comprimento da mesma é muito grande
        $this->assertFalse($animal->validate(
            ['nature_id', 'fur_length_id', 'fur_color_id', 'size_id', 'sex', 'create_at', 'chipId', 'description']
        ));

        //Preenche todos os atributos com um int
        foreach ($animal->attributes() as $attribute){
            $animal->$attribute = 2;
        }
        //Verifica se todos os campos do tipo string arrebetam
        $this->assertFalse($animal->validate(
            ['sex', 'chipId', 'description']
        ));
        //Verifica todos os campos do tipo int podem levar um int
        $this->assertTrue($animal->validate(
            ['nature_id']
        ));
    }

    public function testSaveAnimal(){
        //cria novo animal
        $animal = new Animal();
        //Preenche os campos
        $animal->name = 'Foo';

        $animal->nature_id = 2;
        $animal->fur_length_id = 1;
        $animal->fur_color_id = 3;
        $animal->size_id = 1;

        $animal->sex = 'F';
        $animal->chipId = '623621533336';
        $animal->description = 'Animal de teste para verificar o save na BD';
        //Salva o animal e ve se esta tudo ok
        $this->assertTrue($animal->save(), json_encode($animal->errors));
    }

}
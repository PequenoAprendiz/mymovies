<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Pessoa;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateTest extends TestCase
{
    /**
    use DatabaseMigrations;

     * A basic feature test example.
     *
     * @return void

    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_pessoa_can_be_created()
    {
        $pessoa = Pessoa::create(['nome' => 'José', 'sobrenome' => 'Almeida', 'titulacao' =>'Especialista',
            'cpf' => '11111111111', 'rg' => '0225123321', 'id_user' => null]);

        $latest_pessoa = Pessoa::latest()->first();

        $this->assertEquals($pessoa->id, $latest_pessoa->id);
        $this->assertEquals('José', $latest_pessoa->nome);
        $this->assertEquals('Almeida', $latest_pessoa->sobrenome);
        $this->assertEquals('11111111111', $latest_pessoa->cpf);

        $this->seeInDatabase('pessoas', ['id' => 1, 'nome' => 'José', 'sobrenome' => 'Almeida', 'cpf' => '11111111111']);

    }*/
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testViewPoint()
    {
        $this->get('/admin/pessoa')->assertStatus(200);
        $this->get('/admin/pessoa')->assertViewHas('pessoa');
        $this->get('/admin/endereco')->assertStatus(200);
        $this->get('/admin/endereco')->assertViewHas('endereco');
        $this->get('/admin/filme_favorito')->assertStatus(200);
        $this->get('/admin/filme_favorito')->assertViewHas('pessoa');
        $this->get('/login')->assertStatus(200);
    }
}

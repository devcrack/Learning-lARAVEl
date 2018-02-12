<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Users_ModuleTest extends TestCase
{
    /**
     * A test for load user
     *
     * @return void
     */
    public function test_load_user()
    {
//        $this->assertTrue(true);
        $this->withoutExceptionHandling(); //Esta opcion nos sirve para que en caso de que la prueba

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de Usuarios')
            ->assertSee('Pacho')
            ->assertSee('Ramon')
            ->assertSee('Pedro')
            ->assertSee('Daniel')
            ->assertSee('Joel');
    }


    /**
     *Load the details of users
     */
    public function test_load_detail_user() {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle del Usuario = 5');
    }

    public function test_crear_nuevo_usuario() {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}

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

    public function test_empty_users() {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados');
    }


    /**
     *Load the details of users
     */
    public function test_load_detail_user() {
        $this->get('/usuarios/Ramon/5')
            ->assertStatus(200)
            ->assertSee('Detalle de Usuario:')
            ->assertSee('Usuario:Ramon id = 5');
    }

    public function test_crear_nuevo_usuario() {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}

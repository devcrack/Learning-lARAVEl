<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * Para que lARAVEL tome el metodo como una prueba tiene que ir como primera palabra
     * 'test', en el identificador del metodo.
     *
     * @return void
     */
        public function test_welcome_user_noApdo(){
            $this->get('/saludo/Aurelio')
                ->assertStatus(200)
                ->assertSee('Bienvenido Aurelio, no tienes apodo');
        }

        public function test_welcome_user_Apdo() {
            $this->get('/saludo/Daniel/Ñañel')
                ->assertStatus(200)
                ->assertSee('Bienvenido Daniel, tu apodo es Ñañel');
        }
//    public function testExample()
//    {
//        $this->assertTrue(true);
//    }
}

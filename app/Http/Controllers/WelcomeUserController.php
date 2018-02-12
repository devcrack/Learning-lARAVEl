<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    /*
     * Esto se utiliza cuando tenemos un solo metodo publico que represente una sola accion, en este caso cambiamos el nombre del metodo
     * y le ponemos invoke. INvoke es una funcion que nos permite llamar a un objeto o clase como si se tratase de una funcion.
     * */
    public function __invoke($name, $nickname = null) {
        if($nickname)
            return "Bienvenido {$name}, tu apodo es {$nickname}";
        return "Bienvenido {$name}, no tienes apodo";
    }
}

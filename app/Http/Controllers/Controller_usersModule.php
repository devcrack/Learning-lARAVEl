<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_usersModule extends Controller
{
    //
    public function index_users()
    {
        $users = ['Pacho', 'Ramon', 'Pedro','Daniel', 'Joel'];
/*Forma 1 de pasar parametros mediante return */
//        return view('users',
//            [
//                'list_users'=>$users,
//                'title' => 'Listado de Usuarios'
//            ]);

        /*Forma 2*/
        return view('users')
            ->with('list_users', $users)
            ->with('title', 'LIstado de Usuarios');
    }

    public function show_detail_user($id) {
        return "Mostrando detalle del Usuario = {$id}";
    }

    public function new_user(){
        return 'Crear nuevo usuario';
    }

}

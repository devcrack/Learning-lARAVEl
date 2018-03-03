<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;

class Controller_usersModule extends Controller
{
    //
    var $users = ['Pacho', 'Ramon', 'Pedro', 'Daniel', 'Joel'];

    public function index_users()
    {
        if(request()->has('empty')) {
            $users = [];
        }
        else {
            $users = ['Pacho', 'Ramon', 'Pedro', 'Daniel', 'Joel'];
        }

        /*Forma 1 de pasar parametros mediante return */
        //        return view('users',
        //            [
       //                'list_users'=>$users,
      //                'title' => 'Listado de Usuarios'
       //            ]);

        /*Forma 2*/
        return view('users')
            ->with('list_users', $users)
            ->with('title', 'Listado de Usuarios');
    }

    public function show_detail_user($user_name, $id) {
        //dd($user_name); //Muestra el contenido de las variables en el explorador sirve para debugeear.
        foreach ($this->users as $user) {
            if ($user == $user_name) {
                /*return view('user_details')
                    ->with('user_name', $user)
                    ->with('user_id', $id);*/
                return view('user-show')
                    ->with('user_name', $user)
                    ->with('user_id', $id);
            }
        }
//        return "Mostrando detalle del Usuario = {$id}";

/*        return view('user_details')
            ->with('user_name',null)
            ->with('user_id',$id);*/
        return view('users-show')
            ->with('user_name', null)
            ->with('user_id', $id);
    }

    public function new_user(){
        return 'Crear nuevo usuario';
    }

}


//$this->get('/usuarios/5')
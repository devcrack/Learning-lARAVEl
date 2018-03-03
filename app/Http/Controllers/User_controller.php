<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_controller extends Controller
{
    //Module Class that allow us load everything related with the users modules
    public function users_index() {
        return 'Usuarios';
    }

    public function user_show_details() {

    }
}

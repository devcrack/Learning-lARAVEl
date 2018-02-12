<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| La barra diagonal ('/') indica que es la raiz del directorio public, por lo cual se estara haciendo
| referencia al archivo index.php
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|Ejemplo #1
|
*/
Route::get('/usuarios', 'Controller_usersModule@index_users');

Route::get('/usuarios/{id}', 'Controller_usersModule@show_detail_user')->where('id', '[0-9]+');

/*
 *Ejemplo #3
 */
Route::get('/usuarios/nuevo', 'Controller_usersModule@new_user');


Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');
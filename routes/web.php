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
Route::get('/usuarios', function (){
   return 'Usuarios';
});

Route::get('/usuarios/{id}', function ($id){
    return "Mostrando detalle del Usuario = {$id}";
})->where('id', '[0-9]+');

/*
 *Ejemplo #3
 */
Route::get('/usuarios/nuevo', function (){
   return 'Crear nuevo usuario';
});


Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if($nickname)
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    return "Bienvenido {$name}, no tienes apodo";
});
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * En este metodo se especifica lo que se desea que realize la migracion.
     *En este caso crea la tabla de usuarios.
     * @param string $users Se refiere al nombre de la tabla.
     * @param funcion anonima, esta funcion recibe un parametro que lARAVEl pasa automaticamente.
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); //Entero sin signo - autoincrementable.
            $table->string('name');
            $table->string('email','50')->unique();
            $table->string('password');
            $table->unsignedInteger('profession_id');                                                             //|Creando campo para enlazar con clave foranea.|
            $table->foreign('profession_id')->references('id')->on('profession');                                //|Creando restriccion de clave foranea.|
            $table->rememberToken();                                                                                     //|Metodo helper que permite genera columnas comunes en nuestra aplicacion|
            $table->timestamps(); //Es una marca de tiempo, convieniente con el que se declaran 2 columnas
        });
    }

    /**
     * Reverse the migrations.
     * Hace totalmente lo contrario de create, es decir destruye la tabla de la base de datos.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); //Elimina la tabla en caso de que exista
    }
}

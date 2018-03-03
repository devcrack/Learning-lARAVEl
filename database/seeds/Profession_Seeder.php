<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Profession_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); /*Sentencia de SQL, Desactiva la verficacion de llaves foranes en la base de datos*/
        /*Limpiando la tabla antes de insertar Datos*/
        DB::table('profession')->truncate();

        /*Insertando nueva migracion*/
        DB::table('profession')->insert([
            'title'=>'Desarrollador Backend',
        ]);

        DB::table('profession')->insert([
            'title'=>'Desarrollador Frontend',
        ]);

        DB::table('profession')->insert([
            'title'=>'Desarrollador Diseñador Web',
        ]);


    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /**
         *
         * Invocamos al seeder que creamos */
        $this->call(Profession_Seeder::class); //|Se obtiene el nombre de la clase.
    }
}

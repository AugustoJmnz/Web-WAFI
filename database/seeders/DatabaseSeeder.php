<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Llenando Tabla Users
        //Shift+alt+f se acomada el codigo
        \App\Models\User::create(
            [
                'name' => 'Jorge',
                'lastname' => 'Jimenez',
                'email' => 'jorgejmnz30@gmail.com',
                'password' => bcrypt('123'),
            ]
        );
    }
}

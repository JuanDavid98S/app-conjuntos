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
         \App\Models\Usuario::factory(10)->create();
         \App\Models\Comentario::factory(10)->create();
         \App\Models\Espacio::factory(10)->create();
         \App\Models\Conjunto::factory(10)->create();
         \App\Models\Espacio::factory(10)->create();
         \App\Models\Pqr::factory(10)->create();
         \App\Models\Solicitud_espacio::factory(10)->create();
         \App\Models\Solicitud::factory(10)->create();
         \App\Models\Tema::factory(10)->create();
         \App\Models\Transaccion::factory(10)->create();
         \App\Models\Vivienda::factory(10)->create();
    }
}

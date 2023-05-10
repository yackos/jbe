<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Atleta;
use App\Models\Categoria;
use App\Models\Hab_Fisica;
use App\Models\Salud;
use App\Models\Talla;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Yean Martinez',
            'email' => 'yackos@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        Categoria::create([
            'nombre' => 'Sin Categoria'
        ]);

        Categoria::create([
            'nombre' => 'Sub-5'
        ]);

        Categoria::create([
            'nombre' => 'Sub-7'
        ]);

        Categoria::create([
            'nombre' => 'Sub-9'
        ]);

        Categoria::create([
            'nombre' => 'Sub-12'
        ]);

        Categoria::create([
            'nombre' => 'Sub-15'
        ]);

        Categoria::create([
            'nombre' => 'Sub-17'
        ]);

        Atleta::factory(120)->has(Talla::factory(1))->create();

        Hab_Fisica::factory(120)->create();

        Salud::factory(120)->create();
                
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

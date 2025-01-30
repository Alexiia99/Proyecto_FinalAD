<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            ProfesoresSeeder::class,
            AulasSeeder::class,
            EstudiantesSeeder::class,
            AsignaturasSeeder::class,
            AsistenciasSeeder::class,
            EstudianteAsignaturaSeeder::class,
            CalificacionSeeder::class,
            AulaProfesorAsignaturaSeeder::class,
            LibroSeeder::class
        ]);
    }
}

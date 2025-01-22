<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;


class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Estudiante::create([
            'nombre' => 'Mario',
            'apellidos' => 'Pascual',
            'curso' => 'DAM2',
            'tutor' => 1,
        ]);
        Estudiante::create([
            'nombre' => 'David',
            'apellidos' => 'Soler',
            'curso' => 'DAM1',
            'tutor' => 2,
        ]);
        Estudiante::create([
            'nombre' => 'Martin',
            'apellidos' => 'Ernst',
            'curso' => 'DAW2',
            'tutor' => 1,
        ]);
    }
}

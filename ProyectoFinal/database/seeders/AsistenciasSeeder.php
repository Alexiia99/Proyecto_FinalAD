<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asistencia;


class AsistenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asistencia::create([
            'estudiante_id' => 1,
            'asignatura_id' => 1,
            'fecha' => '2023-06-08',
            'estado' => false,
        ]);
        Asistencia::create([
            'estudiante_id' => 3,
            'asignatura_id' => 2,
            'fecha' => '2023-06-08',
            'estado' => true,
        ]);
        Asistencia::create([
            'estudiante_id' => 1,
            'asignatura_id' => 3,
            'fecha' => '2023-06-08',
            'estado' => FALSE,
        ]);
        Asistencia::create([
            'estudiante_id' => 1,
            'asignatura_id' => 2,
            'fecha' => '2023-06-08',
            'estado' => true,
        ]);
    }
}

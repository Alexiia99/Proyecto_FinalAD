<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstudianteAsignatura;
use App\Models\Estudiante;
use App\Models\Asignatura;
use Carbon\Carbon;

class EstudianteAsignaturaSeeder extends Seeder
{
    public function run()
    {
        $fechaInicioCurso = Carbon::create(2024, 9, 15);
        $fechaFinCurso = Carbon::create(2025, 6, 21);

        $estudiantes = Estudiante::all();
        $asignaturas = Asignatura::all();

        foreach ($estudiantes as $estudiante) {
            foreach ($asignaturas as $asignatura) {
                EstudianteAsignatura::create([
                    'estudiante_id' => $estudiante->id,
                    'asignatura_id' => $asignatura->id,
                    'fecha_inicio' => $fechaInicioCurso,
                    'fecha_fin' => $fechaFinCurso
                ]);
            }
        }
    }
}
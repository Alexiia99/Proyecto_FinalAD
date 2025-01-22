<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Calificacion;
use App\Models\Estudiante;  // Cambiado de Estudiantes a Estudiante
use App\Models\Asignatura;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudiantes = Estudiante::all();  // Cambiado de Estudiantes a Estudiante
        $asignaturas = Asignatura::all();
        $periodos = ['1er Trimestre', '2do Trimestre', '3er Trimestre'];

        foreach($estudiantes as $estudiante) {
            foreach($asignaturas as $asignatura) {
                foreach($periodos as $periodo) {
                    Calificacion::create([
                        'estudiante_id' => $estudiante->id,
                        'asignatura_id' => $asignatura->id,
                        'calificacion' => rand(50, 100) / 10,
                        'periodo' => $periodo
                    ]);
                }
            }
        }
    }
}
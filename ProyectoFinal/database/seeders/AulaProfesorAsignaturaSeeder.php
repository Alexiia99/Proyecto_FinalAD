<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AulaProfesorAsignatura;
use App\Models\Aula;
use App\Models\Profesor;

use App\Models\Asignatura;




class AulaProfesorAsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Asumiendo que ya tienes datos en las tablas relacionadas
         $aulas = Aula::all();
         $profesores = Profesor::all();
         $asignaturas = Asignatura::all();
 
         foreach($aulas as $aula) {
             // Crear 3 asignaciones por aula
             for($i = 0; $i < 3; $i++) {
                 AulaProfesorAsignatura::create([
                     'aula_id' => $aula->id,
                     'profesor_id' => $profesores->random()->id,
                     'materia_id' => $asignaturas->random()->id,
                     'fecha_inicio' => now(),
                     'fecha_fin' => now()->addMonths(6),
                 ]);
             }
         }
    }
}

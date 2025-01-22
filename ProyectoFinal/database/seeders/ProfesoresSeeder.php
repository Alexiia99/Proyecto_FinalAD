<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;


class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profesor::create([
            'nombre' => 'Alberto',
            'apellidos' => 'Del Dedo',
            'especializacion' => 'Programación',
        ]);
        Profesor::create([
            'nombre' => 'Jose',
            'apellidos' => 'Aniorte',
            'especializacion' => 'Acceso a datos y APIREST',
        ]);
        
    }
}

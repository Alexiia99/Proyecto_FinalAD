<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asignatura;


class AsignaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asignatura::create([
            'nombre' => 'Acceso a datos',
            'descripcion' => 'Curso de Acceso a Datos con API REST y Laravel',
            'profesor_id' => 2,
        ]);
        Asignatura::create([
            'nombre' => 'Programación Java',
            'descripcion' => 'Curso de lenguaje de programación Java',
            'profesor_id' => 1,
        ]);
        Asignatura::create([
            'nombre' => 'Sistemas informáticos',
            'descripcion' => 'Curso más aburrido de todos, damos solo teoría',
            'profesor_id' => 1,
        ]);
    }
}

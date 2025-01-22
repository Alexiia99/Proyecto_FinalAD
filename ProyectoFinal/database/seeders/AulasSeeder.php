<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aula;

class AulasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aula::create([
            'nombre' => 'Aula 101',
            'capacidad' => 30,
            'ubicacion' => 'Edificio A',
        ]);
        Aula::create([
            'nombre' => 'Aula 103',
            'capacidad' => 30,
            'ubicacion' => 'Edificio A',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    public function run()
    {
        Libro::create([
            'nombre' => 'Inicios de DB',
            'asignatura_id' => 1
        ]);
    }
}
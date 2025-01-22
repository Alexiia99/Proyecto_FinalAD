<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';

    protected $fillable = ['nombre', 'capacidad', 'ubicacion'];
    
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class);
    }
}

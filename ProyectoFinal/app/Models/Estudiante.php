<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['nombre', 'apellidos', 'curso', 'tutor'];
    
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class)->withPivot('calificacion', 'periodo');
    }
    
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'tutor');
    }
}

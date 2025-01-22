<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';
    
    protected $fillable = ['nombre', 'apellidos', 'especializacion'];
    
    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class);
    }
    
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'tutor');
    }
}

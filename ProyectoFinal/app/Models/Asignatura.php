<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'profesor_id'];
    
    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class)->withPivot('calificacion', 'periodo');
    }
    
    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }
}

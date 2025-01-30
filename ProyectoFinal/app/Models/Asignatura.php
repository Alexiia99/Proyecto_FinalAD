<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'profesor_id'];
    
    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class, 'estudiante_asignatura')
                    ->withPivot('fecha_inicio', 'fecha_fin');
    }

    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class);
    }
    
    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }
    public function aulas()
{
    return $this->belongsToMany(Aula::class, 'aula_profesor_asignatura', 'materia_id', 'aula_id');
}
public function libros()
{
    return $this->hasMany(Libro::class);
}
}
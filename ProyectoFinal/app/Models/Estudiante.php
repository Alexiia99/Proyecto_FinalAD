<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['nombre', 'apellidos', 'curso', 'tutor'];
    
   public function asignaturas()
   {
       return $this->belongsToMany(Asignatura::class, 'estudiante_asignatura')
                   ->withPivot('fecha_inicio', 'fecha_fin');
   }
   
   public function calificaciones()
   {
       return $this->hasMany(Calificacion::class);
   }
    
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'tutor');
    }
public function asistencias()
{
    return $this->hasMany(Asistencia::class);
}
}

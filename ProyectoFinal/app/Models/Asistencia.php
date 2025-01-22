<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = ['estudiante_id', 'asignatura_id', 'fecha', 'estado'];
    
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
    
    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
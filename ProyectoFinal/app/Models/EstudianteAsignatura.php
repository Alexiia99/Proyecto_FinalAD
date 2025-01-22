<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudianteAsignatura extends Model
{
    use HasFactory;

    protected $table = 'estudiante_asignatura';

    protected $fillable = [
        'estudiante_id',
        'asignatura_id',
        'fecha_inicio',
        'fecha_fin'
    ];

    // Cast de fechas
    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime'
    ];

    // Relaciones
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
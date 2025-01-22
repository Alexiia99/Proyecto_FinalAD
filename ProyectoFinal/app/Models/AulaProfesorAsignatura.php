<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AulaProfesorAsignatura extends Model
{
    use HasFactory;

    protected $table = 'aula_profesor_asignatura';

    protected $fillable = [
        'aula_id',
        'profesor_id',
        'materia_id',
        'fecha_inicio',
        'fecha_fin'
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date'
    ];

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'materia_id');
    }
}
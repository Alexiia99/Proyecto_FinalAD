<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = ['nombre', 'asignatura_id'];

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
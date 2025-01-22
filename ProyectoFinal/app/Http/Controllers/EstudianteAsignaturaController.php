<?php

namespace App\Http\Controllers;

use App\Models\EstudianteAsignatura;
use Illuminate\Http\Request;

class EstudianteAsignaturaController extends Controller
{
    public function index()
    {
        return EstudianteAsignatura::with(['estudiante', 'asignatura'])->get();
    }

    public function store(Request $request)
    {
        $validados = $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'asignatura_id' => 'required|exists:asignaturas,id',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio'
        ]);

        return EstudianteAsignatura::create($validados);
    }

    public function show(EstudianteAsignatura $estudianteAsignatura)
    {
        return $estudianteAsignatura->load(['estudiante', 'asignatura']);
    }

    public function update(Request $request, EstudianteAsignatura $estudianteAsignatura)
    {
        $validados = $request->validate([
            'estudiante_id' => 'exists:estudiantes,id',
            'asignatura_id' => 'exists:asignaturas,id',
            'fecha_inicio' => 'date',
            'fecha_fin' => 'date|after:fecha_inicio'
        ]);

        $estudianteAsignatura->update($validados);
        return $estudianteAsignatura;
    }

    public function destroy(EstudianteAsignatura $estudianteAsignatura)
    {
        $estudianteAsignatura->delete();
        return response()->noContent();
    }
}
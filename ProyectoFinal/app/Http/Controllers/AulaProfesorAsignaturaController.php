<?php

namespace App\Http\Controllers;

use App\Models\AulaProfesorAsignatura;
use Illuminate\Http\Request;

class AulaProfesorAsignaturaController extends Controller
{
    public function index()
    {
        $asignaciones = AulaProfesorAsignatura::with(['aula', 'profesor', 'asignatura'])->get();
        return response()->json($asignaciones);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'aula_id' => 'required|exists:aulas,id',
            'profesor_id' => 'required|exists:profesores,id',
            'materia_id' => 'required|exists:asignaturas,id',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio'
        ]);

        $asignacion = AulaProfesorAsignatura::create($validated);
        return response()->json($asignacion, 201);
    }

    public function show(AulaProfesorAsignatura $asignacion)
    {
        return response()->json($asignacion->load(['aula', 'profesor', 'asignatura']));
    }

    public function update(Request $request, AulaProfesorAsignatura $asignacion)
    {
        $validated = $request->validate([
            'aula_id' => 'exists:aulas,id',
            'profesor_id' => 'exists:profesores,id',
            'materia_id' => 'exists:asignaturas,id',
            'fecha_inicio' => 'date',
            'fecha_fin' => 'date|after:fecha_inicio'
        ]);

        $asignacion->update($validated);
        return response()->json($asignacion);
    }

    public function destroy(AulaProfesorAsignatura $asignacion)
    {
        $asignacion->delete();
        return response()->json(null, 204);
    }
}

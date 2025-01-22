<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;

class AsistenciaController extends Controller
{
    public function index()
    {
        $asistencias = Asistencia::all();
        return response()->json($asistencias);
    }

    public function store(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'asignatura_id' => 'required|exists:asignaturas,id',
            'fecha' => 'required|date',
            'estado' => 'required|boolean',
        ]);

        $asistencia = Asistencia::create($request->all());
        return response()->json($asistencia, 201);
    }

    public function show($id)
    {
        $asistencia = Asistencia::findOrFail($id);
        return response()->json($asistencia);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'estudiante_id' => 'sometimes|required|exists:estudiantes,id',
            'asignatura_id' => 'sometimes|required|exists:asignaturas,id',
            'fecha' => 'sometimes|required|date',
            'estado' => 'sometimes|required|boolean',
        ]);

        $asistencia = Asistencia::findOrFail($id);
        $asistencia->update($request->all());
        return response()->json($asistencia);
    }

    public function destroy($id)
    {
        $asistencia = Asistencia::findOrFail($id);
        $asistencia->delete();
        return response()->json(null, 204);
    }
}
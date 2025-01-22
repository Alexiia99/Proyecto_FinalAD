<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return response()->json($estudiantes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'curso' => 'required',
            'tutor' => 'nullable|exists:profesores,id',
        ]);

        $estudiante = Estudiante::create($request->all());
        return response()->json($estudiante, 201);
    }

    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return response()->json($estudiante);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'sometimes|required',
            'apellidos' => 'sometimes|required',
            'curso' => 'sometimes|required',
            'tutor' => 'nullable|exists:profesores,id',
        ]);

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());
        return response()->json($estudiante);
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return response()->json(null, 204);
    }

    public function asignaturas($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $asignaturas = $estudiante->asignaturas;
        return response()->json($asignaturas);
    }
}
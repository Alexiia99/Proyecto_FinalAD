<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;


class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesor::all();
        return response()->json($profesores);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'especializacion' => 'required',
        ]);

        $profesor = Profesor::create($request->all());
        return response()->json($profesor, 201);
    }

    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return response()->json($profesor);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'sometimes|required',
            'apellidos' => 'sometimes|required',
            'especializacion' => 'sometimes|required',
        ]);

        $profesor = Profesor::findOrFail($id);
        $profesor->update($request->all());
        return response()->json($profesor);
    }

    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return response()->json(null, 204);
    }

    public function asignaturas($id)
    {
        $profesor = Profesor::findOrFail($id);
        $asignaturas = $profesor->asignaturas;
        return response()->json($asignaturas);
    }

    public function estudiantes($id)
    {
        $profesor = Profesor::findOrFail($id);
        $estudiantes = $profesor->estudiantes;
        return response()->json($estudiantes);
    }
}
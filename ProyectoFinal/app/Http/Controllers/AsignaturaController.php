<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use App\Models\Profesor;



class AsignaturaController extends Controller
{
    public function index()
    {
        $asignaturas = Asignatura::all();
        return response()->json($asignaturas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'profesor_id' => 'required|exists:profesores,id',
        ]);

        $asignatura = Asignatura::create($request->all());
        return response()->json($asignatura, 201);
    }

    public function show($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        return response()->json($asignatura);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'sometimes|required',
            'descripcion' => 'sometimes|required',
            'profesor_id' => 'sometimes|required|exists:profesores,id',
        ]);

        $asignatura = Asignatura::findOrFail($id);
        $asignatura->update($request->all());
        return response()->json($asignatura);
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->delete();
        return response()->json(null, 204);
    }

    public function estudiantes($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $estudiantes = $asignatura->estudiantes;
        return response()->json($estudiantes);
    }
}
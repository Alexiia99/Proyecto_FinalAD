<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Asignatura;
use App\Models\Estudiante;  
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function index()
    {
        return Calificacion::all();
        // $calificaciones = Calificacion::with(['estudiante', 'asignatura'])->get();
        // return response()->json($calificaciones);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',  
            'asignatura_id' => 'required|exists:asignaturas,id',
            'calificacion' => 'required|numeric|between:0,10',
            'periodo' => 'required|string'
        ]);

        $calificacion = Calificacion::create($validated);
        return response()->json($calificacion, 201);
    }

    public function show($id)
    {
        return Calificacion::find($id)->with(['estudiante','asignatura'])->get();
        // return response()->json($calificacion->load(['estudiante', 'asignatura']));
    }
    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'estudiante_id' => 'exists:estudiantes,id', 
            'asignatura_id' => 'exists:asignaturas,id',
            'calificacion' => 'numeric|between:0,10',
            'periodo' => 'string'
        ]);

        $calificacion = Calificacion::findOrFail($id);
        $calificacion->update($request ->all());
        return response()->json($calificacion);
    }

    public function destroy($id)
    {
        $calificacion = Calificacion::findOrFail($id);
        $calificacion->delete();
        return response()->json(null, 204);
    }

    
}
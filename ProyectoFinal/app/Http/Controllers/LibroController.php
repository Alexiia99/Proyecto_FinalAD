<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Models\Asignatura;

class LibroController extends Controller
{
    public function index()
    {
        return Libro::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'asignatura_id' => 'required|exists:asignaturas,id'
        ]);

        $libro = Libro::create($request->all());
        return response()->json($libro, 201);
    }

    public function show($id)
    {
        return Calificacion::findOrFail($id);
    }

    public function update(Request $request, Libro $id)
    {
        $request->validate([
            'nombre' => 'sometimes|required|string',
            'asignatura_id' => 'sometimes|required|exists:asignaturas,id'
        ]);
        $libro = Libro::findOrFail($id);
        $libro->update($request->all());
        return response()->json($libro);
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return response()->json(null, 204);
    }
    public function libros($id){
        $libro = Libro::findOfFail($id);
        $asignaturas = $libro->asignaturas;
        return response()->json($asignaturas);
    }
}
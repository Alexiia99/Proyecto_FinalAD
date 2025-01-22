<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::all();
        return response()->json($aulas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'capacidad' => 'required|integer',
            'ubicacion' => 'required',
        ]);

        $aula = Aula::create($request->all());
        return response()->json($aula, 201);
    }

    public function show($id)
    {
        $aula = Aula::findOrFail($id);
        return response()->json($aula);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'sometimes|required',
            'capacidad' => 'sometimes|required|integer',
            'ubicacion' => 'sometimes|required',
        ]);

        $aula = Aula::findOrFail($id);
        $aula->update($request->all());
        return response()->json($aula);
    }

    public function destroy($id)
    {
        $aula = Aula::findOrFail($id);
        $aula->delete();
        return response()->json(null, 204);
    }

    public function asignaturas($id)
    {
        $aula = Aula::findOrFail($id);
        $asignaturas = $aula->asignaturas;
        return response()->json($asignaturas);
    }
}
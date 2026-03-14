<?php

namespace App\Http\Controllers;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materia::all();

        return view('materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Materia::create([
            'nombre' => $request->nombre,
            'clave' => $request->clave
        ]);

        return redirect()->route('materias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $materia = Materia::findOrFail($id);

        return view('materias.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $materia = Materia::findOrFail($id);

        $materia->update([
            'nombre' => $request->nombre,
            'clave' => $request->clave
        ]);

        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Materia::destroy($id);

        return redirect()->route('materias.index');
    }
}

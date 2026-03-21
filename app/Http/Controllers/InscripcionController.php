<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = \App\Models\Inscripcion::with('usuario', 'grupo.horario.materia')->get();

        return view('inscripciones.index', compact('inscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = \App\Models\Usuario::all();
        $grupos = \App\Models\Grupo::with('horario.materia')->get();

        return view('inscripciones.create', compact('usuarios', 'grupos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \App\Models\Inscripcion::create([
            'usuario_id' => $request->usuario_id,
            'grupo_id' => $request->grupo_id
        ]);

        return redirect()->route('inscripciones.index');
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
        $inscripcion = \App\Models\Inscripcion::with('usuario', 'grupo')->findOrFail($id);

        return view('inscripciones.edit', compact('inscripcion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $inscripcion = \App\Models\Inscripcion::findOrFail($id);

        $inscripcion->update([
            'calificacion' => $request->calificacion
        ]);

        return redirect()->route('inscripciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

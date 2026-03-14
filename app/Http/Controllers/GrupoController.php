<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;
use App\Models\Horario;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grupos =Grupo::with('horario.materia', 'horario.usuario')->get();

        return view('grupos.index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $horarios = Horario::all();

        return view('grupos.create', compact('horarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Grupo::create([
            'nombre' => $request->nombre,
            'horario_id' => $request->horario_id
        ]);

        return redirect()->route('grupos.index');
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
        $grupo = Grupo::findOrFail($id);
        $horarios = Horario::all();

        return view('grupos.edit', compact('grupo', 'horarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $grupo = Grupo::findOrFail($id);

        $grupo->update([
            'nombre' => $request->nombre,
            'horario_id' => $request->horario_id
        ]);

        return redirect()->route('grupos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Grupo::destroy($id);

        return redirect()->route('grupos.index');
    }
}

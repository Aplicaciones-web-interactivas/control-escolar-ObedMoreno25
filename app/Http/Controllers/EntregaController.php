<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Tarea;
use App\Models\Grupo;
use App\Models\Entrega;
class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'archivo' => 'required|mimes:pdf|max:2048'
        ]);

        $ruta = $request->file('archivo')->store('entregas', 'public');

        Entrega::updateOrCreate(
            [
                'tarea_id' => $request->tarea_id,
                'usuario_id' => $request->usuario_id
            ],
            [
                'archivo' => $ruta
            ]
        );

        return back()->with('success', 'Archivo subido correctamente');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

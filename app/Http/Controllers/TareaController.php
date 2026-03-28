<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrega;
use App\Models\Tarea;
use App\Models\Grupo;
use App\Models\Inscripcion;
class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::with('grupo')->get();

        return view('tareas.index', compact('tareas'));
    }

    public function create()
    {
        $grupos = Grupo::all();

        return view('tareas.create', compact('grupos'));
    }

    public function store(Request $request)
    {
        Tarea::create($request->all());

        return redirect()->route('tareas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarea = Tarea::with('grupo')->findOrFail($id);

        return view('tareas.show', compact('tarea'));

    }

    public function entregas($id)
    {
        $tarea = Tarea::with('grupo')->findOrFail($id);

        $alumnos = Inscripcion::with('usuario')
            ->where('grupo_id', $tarea->grupo_id)
            ->get();

        $entregas = Entrega::where('tarea_id', $id)->get();

        $totalAlumnos = $alumnos->count();
        $totalEntregas = $entregas->unique('usuario_id')->count();

        $porcentaje = $totalAlumnos > 0
            ? round(($totalEntregas / $totalAlumnos) * 100)
            : 0;

        return view('tareas.entregas', compact(
            'tarea',
            'alumnos',
            'entregas',
            'totalAlumnos',
            'totalEntregas',
            'porcentaje'
        ));
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

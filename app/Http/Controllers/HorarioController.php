<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Usuario;
use App\Models\Horario;
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarios = Horario::with(['materia', 'usuario'])->get();
        return view('horarios.index', compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materias = Materia::all();
        $usuarios = Usuario::all();

        return view('horarios.create', compact('materias', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dias = implode(',', $request->dias);

        Horario::create([
            'materia_id' => $request->materia_id,
            'usuario_id' => $request->usuario_id,
            'dias' => $dias,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin
        ]);

        return redirect()->route('horarios.index');
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
    public function edit($id)
    {
        $horario = Horario::findOrFail($id);
        $materias =Materia::all();
        $usuarios =Usuario::all();

        return view('horarios.edit', compact('horario', 'materias', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $horario =Horario::findOrFail($id);
        $horario->update($request->all());

        return redirect()->route('horarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Horario::destroy($id);
        return redirect()->route('horarios.index');
    }
}

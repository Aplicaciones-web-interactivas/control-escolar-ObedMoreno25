@extends('layouts.app')

@section('contenido')
    <h1 class="text-2xl font-bold mb-6">
        Asignar Calificación
    </h1>

    <form action="{{ route('inscripciones.update', $inscripcion->id) }}" method="POST"
        class="bg-white p-6 rounded shadow max-w-md">

        @csrf
        @method('PUT')

        <p class="mb-2">
            Alumno: {{ $inscripcion->usuario->nombre }}
        </p>

        <p class="mb-4">
            Grupo: {{ $inscripcion->grupo->nombre }}
        </p>

        <label class="block mb-2">
            Calificación
        </label>

        <input type="number" name="calificacion" step="0.1" min="0" max="100"
            value="{{ $inscripcion->calificacion }}" class="w-full border p-2 rounded mb-4">

        <button class="bg-green-500 text-white px-4 py-2 rounded">

            Guardar

        </button>

    </form>
@endsection

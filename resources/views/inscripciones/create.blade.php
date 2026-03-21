@extends('layouts.app')

@section('contenido')
    <h1 class="text-2xl font-bold mb-6">
        Nueva Inscripción
    </h1>

    <form action="{{ route('inscripciones.store') }}" method="POST" class="bg-white p-6 rounded shadow max-w-md">

        @csrf

        <!-- Alumno -->

        <div class="mb-4">

            <label class="block mb-1 text-gray-600">
                Alumno
            </label>

            <select name="usuario_id" class="w-full border p-2 rounded">

                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">
                        {{ $usuario->nombre }}
                    </option>
                @endforeach

            </select>

        </div>

        <!-- Grupo -->

        <div class="mb-6">

            <label class="block mb-1 text-gray-600">
                Grupo
            </label>

            <select name="grupo_id" class="w-full border p-2 rounded">

                @foreach ($grupos as $grupo)
                    <option value="{{ $grupo->id }}">

                        {{ $grupo->nombre }} |
                        {{ $grupo->horario->materia->nombre }}

                    </option>
                @endforeach

            </select>

        </div>

        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">

            Guardar

        </button>

    </form>
@endsection

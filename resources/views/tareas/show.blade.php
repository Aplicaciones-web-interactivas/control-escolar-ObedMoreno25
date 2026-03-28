@extends('layouts.app')

@section('contenido')
    <div class="max-w-2xl mx-auto">

        <!-- TARJETA -->

        <div class="bg-white shadow rounded p-6">

            <!-- TÍTULO -->

            <h1 class="text-2xl font-bold text-gray-700 mb-2">
                <i class="fa-solid fa-book"></i>
                {{ $tarea->titulo }}
            </h1>

            <!-- GRUPO -->

            <p class="text-gray-500 mb-2">
                <i class="fa-solid fa-users"></i>
                Grupo: {{ $tarea->grupo->nombre }}
            </p>

            <!-- DESCRIPCIÓN -->

            <p class="text-gray-600 mb-4">
                {{ $tarea->descripcion }}
            </p>

            <!-- FECHA -->

            <p class="text-sm text-gray-500 mb-6">
                <i class="fa-solid fa-calendar"></i>
                Fecha de entrega: {{ $tarea->fecha_entrega }}
            </p>

            <hr class="mb-6">

            <!-- SUBIR ARCHIVO -->

            <h2 class="text-lg font-semibold text-gray-700 mb-3">
                <i class="fa-solid fa-upload"></i>
                Subir entrega (PDF)
            </h2>

            <form action="{{ route('entregas.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">

                @csrf

                <input type="hidden" name="tarea_id" value="{{ $tarea->id }}">
                <select name="usuario_id" class="w-full border p-2 rounded">

                    @foreach (\App\Models\Usuario::all() as $usuario)
                        <option value="{{ $usuario->id }}">
                            {{ $usuario->nombre }}
                        </option>
                    @endforeach

                </select>

                <input type="file" name="archivo" accept="application/pdf" class="w-full border p-2 rounded" required>

                <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600" href="{{ route('tareas.index') }}">

                    <i class="fa-solid fa-paper-plane"></i>
                    Enviar PDF

                </button>

            </form>

        </div>

        <!-- BOTÓN REGRESAR -->

        <div class="mt-4 text-center">

            <a href="{{ route('tareas.index') }}" class="text-blue-500 hover:underline">

                ← Volver a tareas

            </a>

        </div>

    </div>
@endsection

@extends('layouts.app')

@section('contenido')
    <div class="max-w-xl mx-auto">

        <h1 class="text-2xl font-bold text-gray-700 mb-6">
            Nueva Tarea
        </h1>

        <div class="bg-white shadow rounded p-6">

            <form action="{{ route('tareas.store') }}" method="POST">

                @csrf

                <!-- Título -->

                <div class="mb-4">

                    <label class="block text-gray-600 mb-1">
                        Título
                    </label>

                    <input type="text" name="titulo" class="w-full border p-2 rounded focus:ring focus:ring-blue-200"
                        required>

                </div>

                <!-- Descripción -->

                <div class="mb-4">

                    <label class="block text-gray-600 mb-1">
                        Descripción
                    </label>

                    <textarea name="descripcion" class="w-full border p-2 rounded focus:ring focus:ring-blue-200" rows="3"></textarea>

                </div>

                <!-- Fecha -->

                <div class="mb-4">

                    <label class="block text-gray-600 mb-1">
                        Fecha de entrega
                    </label>

                    <input type="date" name="fecha_entrega" class="w-full border p-2 rounded">

                </div>

                <!-- Grupo -->

                <div class="mb-6">

                    <label class="block text-gray-600 mb-1">
                        Grupo
                    </label>

                    <select name="grupo_id" class="w-full border p-2 rounded">

                        @foreach ($grupos as $grupo)
                            <option value="{{ $grupo->id }}">
                                {{ $grupo->nombre }}
                            </option>
                        @endforeach

                    </select>

                </div>

                <!-- Botones -->

                <div class="flex justify-between">

                    <a href="{{ route('tareas.index') }}"
                        class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">

                        Cancelar

                    </a>

                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">

                        Guardar

                    </button>

                </div>

            </form>

        </div>

    </div>
@endsection

@extends('layouts.app')

@section('contenido')
    <div class="max-w-4xl mx-auto mt-10">

        <h1 class="text-2xl font-bold mb-6">
            Materias
        </h1>

        <a class="bg-blue-500 text-white px-4 py-2 rounded">
            <i class="fa-solid fa-plus"></i> Nueva Materia
        </a>

        <table class="min-w-full mt-6 bg-white shadow rounded">

            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3">ID</th>
                    <th class="p-3">Nombre</th>
                    <th class="p-3">Clave</th>
                    <th class="p-3">Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($materias as $materia)
                    <tr class="border-b">

                        <td class="p-3">{{ $materia->id }}</td>
                        <td class="p-3">{{ $materia->nombre }}</td>
                        <td class="p-3">{{ $materia->clave }}</td>

                        <td class="p-3">

                            <a href="{{ route('materias.edit', $materia->id) }}"
                                class="bg-yellow-400 text-white px-3 py-2 rounded hover:bg-yellow-500">

                                <i class="fa-solid fa-pen"></i>

                            </a>

                            <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" class="inline">

                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 text-white px-3 py-1 rounded">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </form>

                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection

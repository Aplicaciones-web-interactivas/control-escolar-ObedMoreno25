@extends('layouts.app')

@section('contenido')
    <div class="max-w-6xl mx-auto mt-10">

        <h1 class="text-2xl font-bold mb-6 text-gray-700">
            Lista de Grupos
        </h1>

        <a href="{{ route('grupos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Nuevo Grupo
        </a>

        <div class="bg-white shadow rounded-lg mt-6 overflow-hidden">

            <table class="min-w-full">

                <thead class="bg-gray-200 text-gray-600 uppercase text-sm">

                    <tr>

                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Grupo</th>
                        <th class="py-3 px-6 text-left">Materia</th>
                        <th class="py-3 px-6 text-left">Maestro</th>
                        <th class="py-3 px-6 text-left">Días</th>
                        <th class="py-3 px-6 text-left">Horario</th>
                        <th class="py-3 px-6 text-center">Acciones</th>

                    </tr>

                </thead>

                <tbody class="text-gray-700">

                    @foreach ($grupos as $grupo)
                        <tr class="border-b hover:bg-gray-100">

                            <td class="py-3 px-6">
                                {{ $grupo->id }}
                            </td>

                            <td class="py-3 px-6 font-semibold">
                                {{ $grupo->nombre }}
                            </td>

                            <td class="py-3 px-6">
                                {{ $grupo->horario->materia->nombre }}
                            </td>

                            <td class="py-3 px-6">
                                {{ $grupo->horario->usuario->nombre }}
                            </td>

                            <td class="py-3 px-6">

                                @foreach (explode(',', $grupo->horario->dias) as $dia)
                                    <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-sm mr-1">
                                        {{ $dia }}
                                    </span>
                                @endforeach

                            </td>

                            <td class="py-3 px-6">

                                {{ $grupo->horario->hora_inicio }}
                                -
                                {{ $grupo->horario->hora_fin }}

                            </td>

                            <td class="py-3 px-6 text-center">

                                <a href="{{ route('grupos.edit', $grupo->id) }}"
                                    class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">
                                    Editar
                                </a>

                                <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST" class="inline">

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

    </div>
@endsection

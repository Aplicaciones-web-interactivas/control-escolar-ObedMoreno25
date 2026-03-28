@extends('layouts.app')

@section('contenido')
    <div class="flex justify-between items-center mb-6">

        <h1 class="text-2xl font-bold text-gray-700">
            Tareas
        </h1>

        <a href="{{ route('tareas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">

            <i class="fa-solid fa-plus"></i> Nueva Tarea

        </a>

    </div>

    <div class="bg-white shadow rounded overflow-hidden">

        <table class="min-w-full">

            <thead class="bg-gray-200 text-gray-600 uppercase text-sm">

                <tr>
                    <th class="p-3 text-left">Título</th>
                    <th class="p-3 text-left">Grupo</th>
                    <th class="p-3 text-left">Entrega</th>
                    <th class="p-3 text-left">Acciones</th>
                </tr>

            </thead>

            <tbody>

                @foreach ($tareas as $tarea)
                    <tr class="border-b hover:bg-gray-50">

                        <td class="p-3">
                            {{ $tarea->titulo }}
                        </td>

                        <td class="p-3">
                            {{ $tarea->grupo->nombre }}
                        </td>

                        <td class="p-3">
                            {{ $tarea->fecha_entrega }}
                        </td>

                        <td class="p-3 space-x-2">

                            <a href="{{ route('tareas.show', $tarea->id) }}"
                                class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">

                                <i class="fa-solid fa-upload"></i>

                            </a>
                            <a href="{{ route('tareas.entregas', $tarea->id) }}"
                                class="bg-purple-500 text-white px-3 py-1 rounded">

                                <i class="fa-solid fa-eye"></i>

                            </a>
                        </td>


                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection

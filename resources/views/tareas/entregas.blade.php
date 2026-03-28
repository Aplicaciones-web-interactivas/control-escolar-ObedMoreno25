@extends('layouts.app')

@section('contenido')
    <div class="flex justify-between items-center mb-6">

        <h1 class="text-2xl font-bold text-gray-700">
            Entregas
        </h1>

        <a href="{{ route('tareas.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">

            <i class="fa-solid fa-arrow-left"></i> Volver

        </a>

    </div>

    <div class="bg-white shadow rounded p-4 mb-6">

        <h2 class="text-lg font-semibold text-gray-700 mb-2">
            📘 {{ $tarea->titulo }}
        </h2>

        <p class="text-gray-500">
            Grupo: {{ $tarea->grupo->nombre }}
        </p>

        <!-- 🔥 CONTADOR -->
        <p class="mt-2 font-medium text-gray-600">
            Entregas: {{ $totalEntregas }} / {{ $totalAlumnos }}
        </p>

        <!-- 🔥 BARRA DE PROGRESO -->
        <div class="w-full bg-gray-200 rounded h-3 mt-2">

            <div class="bg-blue-500 h-3 rounded" style="width: {{ $porcentaje }}%">

            </div>

        </div>

        <p class="text-sm text-gray-500 mt-1">
            {{ $porcentaje }}% completado
        </p>

    </div>

    <div class="bg-white shadow rounded overflow-hidden">

        <table class="min-w-full">

            <thead class="bg-gray-200 text-gray-600 uppercase text-sm">
                <tr>
                    <th class="p-3 text-left">Alumno</th>
                    <th class="p-3 text-left">Estado</th>
                    <th class="p-3 text-left">Archivo</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($alumnos as $alumno)
                    @php
                        $entrega = $entregas->where('usuario_id', $alumno->usuario_id)->first();
                    @endphp

                    <tr class="border-b hover:bg-gray-50">

                        <td class="p-3">
                            <i class="fa-solid fa-user text-gray-400 mr-2"></i>
                            {{ $alumno->usuario->nombre }}
                        </td>

                        <td class="p-3">

                            @if ($entrega)
                                <span class="text-green-600 font-semibold">
                                    ✔ Entregado
                                </span>
                            @else
                                <span class="text-red-500 font-semibold">
                                    ❌ Pendiente
                                </span>
                            @endif

                        </td>

                        <td class="p-3">

                            @if ($entrega)
                                <a href="{{ asset('storage/' . $entrega->archivo) }}" target="_blank"
                                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">

                                    <i class="fa-solid fa-file-pdf"></i> Ver PDF

                                </a>
                            @else
                                <span class="text-gray-400">
                                    -
                                </span>
                            @endif

                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection

@extends('layouts.app')

@section('contenido')
    <h1 class="text-2xl font-bold mb-6">
        Inscripciones
    </h1>

    <a href="{{ route('inscripciones.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
        Nueva Inscripción
    </a>

    <table class="min-w-full mt-6 bg-white shadow rounded">

        <thead class="bg-gray-200">
            <tr>
                <th class="p-3">Alumno</th>
                <th class="p-3">Grupo</th>
                <th class="p-3">Materia</th>
                <th class="p-3">Calificación</th>
                <th class="p-3">Acciones</th>

            </tr>
        </thead>

        <tbody>

            @foreach ($inscripciones as $inscripcion)
                <tr class="border-b">

                    <td class="p-3">
                        {{ $inscripcion->usuario->nombre }}
                    </td>

                    <td class="p-3">
                        {{ $inscripcion->grupo->nombre }}
                    </td>

                    <td class="p-3">
                        {{ $inscripcion->grupo->horario->materia->nombre }}
                    </td>

                    <td class="p-3">
                        {{ $inscripcion->calificacion ?? 'Sin calificación' }}
                    </td>
                    <td class="p-3">

                        <a href="{{ route('inscripciones.edit', $inscripcion->id) }}"
                            class="bg-green-500 text-white px-3 py-1 rounded">

                            Calificar

                        </a>

                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection

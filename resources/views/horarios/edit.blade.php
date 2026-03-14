<!DOCTYPE html>
<html>

<head>
    <title>Editar Horario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-2xl bg-white shadow rounded-lg p-8">

        <h1 class="text-2xl font-bold text-gray-700 mb-6">
            Editar Horario
        </h1>

        <form action="{{ route('horarios.update', $horario->id) }}" method="POST" class="space-y-5">

            @csrf
            @method('PUT')

            <!-- Materia -->
            <div>
                <label class="block text-sm text-gray-600 mb-1">Materia</label>

                <select name="materia_id" class="w-full border rounded p-2">

                    @foreach ($materias as $materia)
                        <option value="{{ $materia->id }}" {{ $horario->materia_id == $materia->id ? 'selected' : '' }}>

                            {{ $materia->nombre }}

                        </option>
                    @endforeach

                </select>
            </div>

            <!-- Maestro -->
            <div>
                <label class="block text-sm text-gray-600 mb-1">Maestro</label>

                <select name="usuario_id" class="w-full border rounded p-2">

                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}"
                            {{ $horario->usuario_id == $usuario->id ? 'selected' : '' }}>

                            {{ $usuario->nombre }}

                        </option>
                    @endforeach

                </select>
            </div>

            <!-- Días -->
            <div>
                <label class="block text-sm text-gray-600 mb-2">Días</label>

                @php
                    $diasSeleccionados = explode(',', $horario->dias);
                @endphp

                <div class="grid grid-cols-2 gap-2">

                    @foreach (['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'] as $dia)
                        <label class="flex items-center space-x-2">

                            <input type="checkbox" name="dias[]" value="{{ $dia }}"
                                {{ in_array($dia, $diasSeleccionados) ? 'checked' : '' }}>

                            <span>{{ $dia }}</span>

                        </label>
                    @endforeach

                </div>

            </div>

            <!-- Horas -->
            <div class="grid grid-cols-2 gap-4">

                <div>
                    <label class="block text-sm text-gray-600 mb-1">Hora inicio</label>
                    <input type="time" name="hora_inicio" value="{{ $horario->hora_inicio }}"
                        class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1">Hora fin</label>
                    <input type="time" name="hora_fin" value="{{ $horario->hora_fin }}"
                        class="w-full border rounded p-2">
                </div>

            </div>

            <!-- Botones -->
            <div class="flex justify-between pt-4">

                <a href="{{ route('horarios.index') }}" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
                    Cancelar
                </a>

                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Actualizar Horario
                </button>

            </div>

        </form>

    </div>

</body>

</html>

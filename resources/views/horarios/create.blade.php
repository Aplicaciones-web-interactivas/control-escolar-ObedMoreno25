<!DOCTYPE html>
<html>

<head>
    <title>Crear Horario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-2xl bg-white shadow rounded-lg p-8">

        <h1 class="text-2xl font-bold text-gray-700 mb-6">
            Crear Horario
        </h1>

        <form action="{{ route('horarios.store') }}" method="POST" class="space-y-5">

            @csrf

            <!-- Materia -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">Materia</label>
                <select name="materia_id" class="w-full border rounded p-2 focus:ring focus:ring-blue-200">

                    @foreach ($materias as $materia)
                        <option value="{{ $materia->id }}">
                            {{ $materia->nombre }}
                        </option>
                    @endforeach

                </select>
            </div>

            <!-- Maestro -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">Maestro</label>
                <select name="usuario_id" class="w-full border rounded p-2 focus:ring focus:ring-blue-200">

                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">
                            {{ $usuario->nombre }}
                        </option>
                    @endforeach

                </select>
            </div>

            <!-- Días -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-2">Días</label>

                <div class="grid grid-cols-2 gap-2">

                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="dias[]" value="Lunes">
                        <span>Lunes</span>
                    </label>

                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="dias[]" value="Martes">
                        <span>Martes</span>
                    </label>

                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="dias[]" value="Miercoles">
                        <span>Miércoles</span>
                    </label>

                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="dias[]" value="Jueves">
                        <span>Jueves</span>
                    </label>

                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="dias[]" value="Viernes">
                        <span>Viernes</span>
                    </label>

                </div>
            </div>

            <!-- Horas -->
            <div class="grid grid-cols-2 gap-4">

                <div>
                    <label class="block text-sm text-gray-600 mb-1">Hora inicio</label>
                    <input type="time" name="hora_inicio" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1">Hora fin</label>
                    <input type="time" name="hora_fin" class="w-full border rounded p-2">
                </div>

            </div>

            <!-- Botones -->
            <div class="flex justify-between pt-4">

                <a href="{{ route('horarios.index') }}" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
                    Cancelar
                </a>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Guardar Horario
                </button>

            </div>

        </form>

    </div>

</body>

</html>

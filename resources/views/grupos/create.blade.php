<!DOCTYPE html>
<html>

<head>
    <title>Crear Grupo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

        <h1 class="text-2xl font-bold mb-6 text-gray-700">
            Crear Grupo
        </h1>

        <form action="{{ route('grupos.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">
                    Nombre del grupo
                </label>

                <input type="text" name="nombre" class="w-full border rounded p-2 focus:ring focus:ring-blue-200"
                    required>
            </div>

            <div class="mb-6">

                <label class="block text-gray-600 mb-1">
                    Horario
                </label>

                <select name="horario_id" class="w-full border rounded p-2">

                    @foreach ($horarios as $horario)
                        <option value="{{ $horario->id }}">

                            {{ $horario->materia->nombre }}
                            |
                            {{ $horario->usuario->nombre }}
                            |
                            {{ $horario->hora_inicio }}

                        </option>
                    @endforeach

                </select>

            </div>

            <div class="flex justify-between">

                <a href="{{ route('grupos.index') }}"
                    class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">

                    Cancelar

                </a>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">

                    Guardar Grupo

                </button>

            </div>

        </form>

    </div>

</body>

</html>

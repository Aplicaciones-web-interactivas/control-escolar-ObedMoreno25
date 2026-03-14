<!DOCTYPE html>
<html>

<head>
    <title>Editar Materia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

        <h1 class="text-2xl font-bold mb-6 text-gray-700">
            Editar Materia
        </h1>

        <form action="{{ route('materias.update', $materia->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">

                <label class="block text-gray-600 mb-1">
                    Nombre
                </label>

                <input type="text" name="nombre" value="{{ $materia->nombre }}" class="w-full border rounded p-2">

            </div>

            <div class="mb-6">

                <label class="block text-gray-600 mb-1">
                    Clave
                </label>

                <input type="text" name="clave" value="{{ $materia->clave }}" class="w-full border rounded p-2">

            </div>

            <div class="flex justify-between">

                <a href="{{ route('materias.index') }}"
                    class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">

                    Cancelar

                </a>

                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">

                    Actualizar Materia

                </button>

            </div>

        </form>

    </div>

</body>

</html>

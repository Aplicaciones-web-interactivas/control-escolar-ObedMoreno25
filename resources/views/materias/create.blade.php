<!DOCTYPE html>
<html>

<head>
    <title>Nueva Materia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

        <h1 class="text-2xl font-bold mb-6 text-gray-700">
            Nueva Materia
        </h1>

        <form action="{{ route('materias.store') }}" method="POST">

            @csrf

            <div class="mb-4">

                <label class="block text-gray-600 mb-1">
                    Nombre
                </label>

                <input type="text" name="nombre" class="w-full border rounded p-2 focus:ring focus:ring-blue-200"
                    required>

            </div>

            <div class="mb-6">

                <label class="block text-gray-600 mb-1">
                    Clave
                </label>

                <input type="text" name="clave" class="w-full border rounded p-2 focus:ring focus:ring-blue-200"
                    required>

            </div>

            <div class="flex justify-between">

                <a href="{{ route('materias.index') }}"
                    class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">

                    Cancelar

                </a>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">

                    Guardar Materia

                </button>

            </div>

        </form>

    </div>

</body>

</html>

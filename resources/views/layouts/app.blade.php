<!DOCTYPE html>
<html>

<head>

    <title>Control Escolar</title>

    <!-- Tailwind -->

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body class="bg-gray-100">

    <!-- NAVBAR -->

    <nav class="bg-white shadow-lg border-b">

        <div class="max-w-6xl mx-auto px-4">

            <div class="flex justify-between h-16 items-center">

                <!-- LOGO -->

                <div class="flex items-center space-x-2">

                    <div class="bg-blue-500 text-white font-bold px-3 py-1 rounded">
                        CE
                    </div>

                    <span class="font-semibold text-gray-700 text-lg">
                        Control Escolar
                    </span>

                </div>

                <!-- MENU -->

                <div class="flex space-x-8 text-gray-600 font-medium">

                    <a href="{{ url('/materias') }}"
                        class="flex items-center space-x-2 hover:text-blue-500
{{ request()->is('materias*') ? 'text-blue-600 font-semibold' : '' }}">

                        <i class="fa-solid fa-book"></i>

                        <span>Materias</span>

                    </a>

                    <a href="{{ url('/horarios') }}"
                        class="flex items-center space-x-2 hover:text-blue-500
{{ request()->is('horarios*') ? 'text-blue-600 font-semibold' : '' }}">

                        <i class="fa-solid fa-clock"></i>

                        <span>Horarios</span>

                    </a>

                    <a href="{{ url('/grupos') }}"
                        class="flex items-center space-x-2 hover:text-blue-500
{{ request()->is('grupos*') ? 'text-blue-600 font-semibold' : '' }}">

                        <i class="fa-solid fa-users"></i>

                        <span>Grupos</span>

                    </a>

                </div>

            </div>

        </div>

    </nav>

    <!-- CONTENIDO -->

    <div class="max-w-6xl mx-auto mt-8 px-4">

        @yield('contenido')

    </div>

</body>

</html>

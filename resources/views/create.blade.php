<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <h1 class="text-3xl mb-4">Crear Usuario</h1>

    <form action="{{ route('usuarios.store') }}" method="post" class="space-y-4">
        @csrf

        <div>
            <label for="nombre" class="block text-sm font-semibold">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="border p-2 w-full mt-1" required>
        </div>

        <div>
            <label for="apellido" class="block text-sm font-semibold">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="border p-2 w-full mt-1" required>
        </div>

        <div>
            <label for="correo_electronico" class="block text-sm font-semibold">Correo Electrónico:</label>
            <input type="email" name="correo_electronico" id="correo_electronico" class="border p-2 w-full mt-1"
                required>
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700 m-2">Guardar</button>
        <a href="{{ route('usuarios.index') }}" class="bg-gray-500 text-white p-2 rounded mt-2 hover:bg-gray-700">Volver</a>

    </form>

</body>

</html>

<<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <h1 class="text-3xl mb-4">Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre" class="block text-sm font-semibold">Nombre:</label>
            <input type="text" name="nombre" value="{{ $usuario->nombre }}" required
                class="border p-2 w-full mt-1">
        </div>

        <div>
            <label for="apellido" class="block text-sm font-semibold">Apellido:</label>
            <input type="text" name="apellido" value="{{ $usuario->apellido }}" required
                class="border p-2 w-full mt-1">
        </div>

        <div>
            <label for="correo_electronico" class="block text-sm font-semibold">Correo Electrónico:</label>
            <input type="email" name="correo_electronico" value="{{ $usuario->correo_electronico }}" required
                class="border p-2 w-full mt-1">
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700">Actualizar Usuario</button>
    </form>
</body>

</html>


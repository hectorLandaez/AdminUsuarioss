<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <h1 class="text-3xl mb-4">Detalles del Usuario</h1>

    <div class="m-4">
    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $usuario->apellido }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $usuario->correo_electronico }}</p>
    </div>

    <a href="{{ route('usuarios.index') }}" class="bg-gray-500 text-white p-2 rounded mt-4 hover:bg-gray-700">Volver</a>
</body>

</html>
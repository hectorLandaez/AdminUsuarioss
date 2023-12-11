
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <h1 class="text-3xl mb-4">Listado de Usuarios</h1>

    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear Usuario</a>

    <table class="table-auto border-collapse border w-full mt-4">
        <thead>
            <tr>
                <th class="border">ID</th>
                <th class="border">Nombre</th>
                <th class="border">Apellido</th>
                <th class="border">Correo Electrónico</th>
                <th class="border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td class="border">{{ $usuario->id }}</td>
                <td class="border">{{ $usuario->nombre }}</td>
                <td class="border">{{ $usuario->apellido }}</td>
                <td class="border">{{ $usuario->correo_electronico }}</td>
                <td class="border">
                    <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info">Detalles</a>
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

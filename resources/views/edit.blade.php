<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Usuario</h1>

<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" value="{{ $usuario->apellido }}" required>

    <label for="correo_electronico">Correo Electrónico:</label>
    <input type="email" name="correo_electronico" value="{{ $usuario->correo_electronico }}" required>

    <button type="submit" >Actualizar Usuario</button>
</form>
</body>
</html>
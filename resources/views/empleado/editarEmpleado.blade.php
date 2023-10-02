<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Empleado</title>
</head>
<body>
    <h1>Edit Empleado</h1>

    <h2>Nombre Empleado: {{ $empleado->nombre }}</h2>
    <h2>Telefono Empleado: {{ $empleado->nombre }}</h2>
	<h2>Correo Empleado: {{ $empleado->correo }}</h2>
	<h2>Password Empleado: {{ $empleado->password }}</h2>

	<form action="{{route('empleado.update',$empleado)}}" method="POST">
            @csrf
			@method('PATCH')

            
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="nombre" placeholder="Nombre" value="{{$empleado->nombre}}" />

            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" placeholder="Telefono" value="{{$empleado->nombre}}" />
        
            <label for="name">Correo:</label>
            <input type="text" id="correo" name="correo" placeholder="email" value="{{$empleado->correo}}" />

            <label for="password">Pasword:</label>
            <input type="password" id="password"  name="password" placeholder="password" value="{{$empleado->password}}"/>
            
            <input class="boton" type="submit" value="Enviar" />

        </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
</head>
<body>
    <h1>Edit Admin</h1>

    <h2>Nombre Admin: {{ $admin->nombre }}</h2>
	<h2>Correo Admin: {{ $admin->correo }}</h2>
	<h2>Password Admin: {{ $admin->password }}</h2>

	<form action="{{route('admin.update',$admin)}}" method="POST">
            @csrf
			@method('PATCH')

            
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="nombre" placeholder="Nombre" value="{{$admin->nombre}}" />
        
            <label for="name">Correo:</label>
            <input type="text" id="correo" name="correo" placeholder="email" value="{{$admin->correo}}" />

            <label for="password">Pasword:</label>
            <input type="password" id="password"  name="password" placeholder="password" value="{{$admin->password}}"/>
            
            <input class="boton" type="submit" value="Enviar" />

        </form>
    
</body>
</html>
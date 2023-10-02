<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> SOY CREATE </h1>
    <H2> AQUI VA EL FORMULARIO </H2>
	
		<title> Formulario </title>
	</head>
    <bodyd>	
        <h1> Agregar Empleado </h1>
        <form action="/empleado" method="post">
            @csrf
            
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="nombre" value="{{old ('nombre')}}" />
           
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" value="{{old ('telefono')}}" />
        
            <label for="mail">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" value="{{old ('correo')}}"/>

            <label for="password">Pasword:</label>
            <input type="password" id="password"  name="password"/>
            
            <input class="boton" type="submit" value="Enviar" />

        </form>
    </bodyd>
</html>
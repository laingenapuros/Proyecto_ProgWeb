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
    <body >
    	<section>
    		<div class="formulario">
    		<h1 class="formulariotitulo"> Agregar Admins </h1>
    		<form action="/Admin" method="post">
                @csrf
			  
			      <label for="name">Nombre:</label>
			      <input type="text" id="name" name="nombre" />
			    
			      <label for="mail">Correo electrónico:</label>
			      <input type="email" id="correo" name="correo" />
	
			      <label for="password">Pasword:</label>
			      <input type="password" id="password"  name="password"/>
			    <input class="boton" type="submit" value="Enviar" />

			</form>
</div>
    	</section>


    </body>
</html>

    
</body>
</html>
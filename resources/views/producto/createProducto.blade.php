<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Producto</title>
	</head>
	<body>  
        <main>
            <h1>Formulario Producto</h1>
            <form action="/producto" method="POST">
                @csrf
                <label>Nombre</label><br>
                <input type="text" name="nombre" placeholder="Nombre"><br>

                <label>Cantidad</label><br>
                <input type="text" name="cantidad" placeholder="Cantidad"><br>

                <label>Precio</label><br>
                <input type="text" name="precio" placeholder="Precio"><br>
                
                <br><br><button type="submit" value="enviar">Enviar</button>
            </form>
        </main>
	</body>
</html>
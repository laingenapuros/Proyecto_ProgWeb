<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cliente</title>
	</head>
	<body>  
        <main>
            <h1>Formulario Cliente</h1>
            <form action="/cliente" method="POST">
                @csrf
                <label>Nombre</label><br>
                <input type="text" name="nombre" placeholder="Nombre"><br>

                <label>Cantidad</label><br>
                <input type="text" name="cantidad" placeholder="Cantidad"><br>

                <label>Telefono</label><br>
                <input type="text" name="telefono" placeholder="Telefono"><br>

                <label>Producto Menudeo</label><br>
                <input type="text" name="producto_men" placeholder="Producto"><br>
                
                <br><br><button type="submit" value="enviar">Enviar</button>
            </form>
        </main>
	</body>
</html>
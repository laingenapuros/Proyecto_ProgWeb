<!DOCTYPE html>
<?php require('conexion.php'); ?>
<html lang="es">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cliente</title>
	</head>
	<body>  
        <main>
            <div class="nav">
                <a href="index.php">INICIO</a>
                <a href="formulario.php" style="margin-left: 30px;">FORMULARIO</a>	
            </div>
            <h1>Formulario</h1>
            <form action="/cliente" method="POST">
                @ccsrf
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
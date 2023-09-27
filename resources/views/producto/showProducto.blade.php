<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowProducto</title>
</head>
<body>
    <h1>Show Producto</h1>

    <h3>Nombre Producto: {{ $producto->nombre }}</h3>
    <h3>Cantidad: {{ $producto->cantidad }}</h3>
    <h3>Precio: $ {{ $producto->precio }}</h3>
    
</body>
</html>
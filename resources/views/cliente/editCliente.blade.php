<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditCliente</title>
</head>
<body>
    <h1>Edit Cliente</h1>

    <h3>Nombre Cliente: {{ $cliente->nombre }}</h3>
    <h3>Cantidad: {{ $cliente->cantidad }}</h3>
    <h3>Telefono: {{ $cliente->telefono }}</h3>
    <h3>Producto Menudeo: {{ $cliente->producto_men }}</h3>
    
</body>
</html>
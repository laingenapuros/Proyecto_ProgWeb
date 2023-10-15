<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowCliente</title>
</head>
<body>
    <h1>Show Cliente</h1>

    <h3>Nombre Cliente: {{ $cliente->nombre }}</h3>
    <h3>Cantidad: {{ $cliente->cantidad }}</h3>
    <h3>Telefono: {{ $cliente->telefono }}</h3>
    <h3>Producto Menudeo: {{ $cliente->producto_men }}</h3>

    <ul>
        @foreach ($cliente -> requerimientos as $req)
            <li>
                {{ $req ->identificador}}
            </li>
        @endforeach
    </ul>
    
</body>
</html>
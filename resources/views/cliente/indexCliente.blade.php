<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexCliente</title>
</head>
<body>
    <h1>IndexCliente</h1>


   @foreach ($cliente as $cliente)

        <li>{{$cliente->nombre}}</li>
        <li>{{$cantidad->cantidad}}</li>
        <li>{{$telefono->telefono}}</li>
        <li>{{$producto_men->producto_men}}</li>


   @endforeach
    
</body>
</html>
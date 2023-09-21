<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexCliente</title>
</head>
<body>
    <h1>IndexCliente</h1>
    <ul>

        @foreach ($cliente as $cliente)

            <li>{{$cliente -> nombre}}</li>
            <li>{{$cliente -> cantidad}}</li>
            <li>{{$cliente -> telefono}}</li>
            <li>{{$cliente -> producto_men}}</li>

        @endforeach
    </ul>
</body>
</html>
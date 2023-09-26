<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexProducto</title>
</head>
<body>
    <h1>IndexProducto</h1>
    <ul>

        @foreach ($producto as $producto)

            <a href="{{route('producto.show', $producto)}}">
                {{$producto -> nombre}}
            </a>
            <a href="{{route('producto.edit', $producto)}}">
                  Editar
            </a>
            <!--<li>{{$producto -> nombre}}</li>-->
            <li>{{$producto -> cantidad}}</li>
            <li>{{$producto -> precio}}</li>

        @endforeach
    </ul>
</body>
</html>
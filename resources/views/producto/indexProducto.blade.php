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

            <li>Nombre: 
                <a href="{{route('producto.show', $producto)}}">
                    {{$producto -> nombre}}
                </a>
            </li>
            <!--<li>Cantidad: 
                <a href="{{route('producto.show', $producto)}}">
                {{$producto -> cantidad}}
                </a>
                <a href="{{route('producto.edit', $producto)}}">
                    Editar
                </a>
            </li>
            <li>Precio: $
                <a href="{{route('producto.show', $producto)}}">
                    {{$producto -> precio}}
                </a>
                <a href="{{route('producto.edit', $producto)}}">
                    Editar
                </a>
            </li>
            <li>{{$producto -> nombre}}</li>
            <li>Cantidad: {{$producto -> cantidad}}</li>
            <li>Precio: {{$producto -> precio}}</li>-->
            <li>
                <a href="{{route('producto.edit', $producto)}}">
                    Editar
                </a>
            </li>

            <p>--------------------------------</p>

        @endforeach
    </ul>
</body>
</html>
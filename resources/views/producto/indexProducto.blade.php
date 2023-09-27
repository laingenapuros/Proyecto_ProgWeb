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
                <a href="{{route('producto.show', $producto)}}">{{$producto -> nombre}}</a>
            |
            <a href="{{route('producto.edit', $producto)}}">Editar</a>
            |
            <form action="{{route('producto.destroy', $producto)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form></li>
            <p>--------------------------------</p>

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

        @endforeach
    </ul>
</body>
</html>
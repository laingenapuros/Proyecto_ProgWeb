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
            <li>Nombre: 
                <a href="{{route('cliente.show', $cliente)}}">{{$cliente -> nombre}}</a>
            |
            <a href="{{route('cliente.edit', $cliente)}}">Editar</a>
            |
            <form action="{{route('cliente.destroy', $cliente)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form></li>
            <p>--------------------------------</p>

             <!--<li>Cantidad: 
                <a href="{{route('cliente.show', $cliente)}}">
                    {{$cliente -> cantidad}}
                </a>
                <a href="{{route('cliente.edit', $cliente)}}">
                    Editar
                </a>
            </li>
            <li>Telefono: 
                <a href="{{route('cliente.show', $cliente)}}">
                    {{$cliente -> telefono}}
                </a>
                <a href="{{route('cliente.edit', $cliente)}}">
                    Editar
                </a>
            </li>
            <li>Producto Menudeo: 
                <a href="{{route('cliente.show', $cliente)}}">
                    {{$cliente -> producto_men}}
                </a>
                <a href="{{route('cliente.edit', $cliente)}}">
                    Editar
                </a>
            </li>
            <li>{{$cliente -> nombre}}</li>
            <li>Cantidad: {{$cliente -> cantidad}}</li>
            <li>Telefono: {{$cliente -> telefono}}</li>
            <li>Producto Menudeo: {{$cliente -> producto_men}}</li>-->

        @endforeach
    </ul>
</body>
</html>
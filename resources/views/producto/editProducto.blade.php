<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditProducto</title>
</head>
<body>
    <h1>Edit Producto</h1>

    <!--<h3>Nombre Producto: {{ $producto->nombre }}</h3>
    <h3>Cantidad: {{ $producto->cantidad }}</h3>
    <h3>Precio: {{ $producto->precio }}</h3>-->
    
    <form action="{{route('producto.update', $producto)}}" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        @method('PATCH')
        <label>Nombre</label><br>
        <input type="text" name="nombre" placeholder="Nombre" value="{{$producto->nombre}}"><br>

        <label>Cantidad</label><br>
        <input type="text" name="cantidad" placeholder="Cantidad" value="{{$producto->cantidad}}"><br>

        <label>Precio</label><br>
        <input type="text" name="precio" placeholder="Precio" value="{{$producto->precio}}"><br>
        
        <br><br><button type="submit" value="enviar">Enviar</button>
    </form>


</body>
</html>
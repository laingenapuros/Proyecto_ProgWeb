<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditCliente</title>
</head>
<body>
    <h1>Edit Cliente</h1>

    <!--<h3>Nombre Cliente: {{ $cliente->nombre }}</h3>
    <h3>Cantidad: {{ $cliente->cantidad }}</h3>
    <h3>Telefono: {{ $cliente->telefono }}</h3>
    <h3>Producto Menudeo: {{ $cliente->producto_men }}</h3>-->
    <form action="{{route('cliente.update', $cliente)}}" method="POST">
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
        <input type="text" name="nombre" placeholder="Nombre" value="{{$cliente->nombre}}"><br>

        <label>Cantidad</label><br>
        <input type="text" name="cantidad" placeholder="Cantidad" value="{{$cliente->cantidad}}"><br>

        <label>Telefono</label><br>
        <input type="text" name="telefono" placeholder="Telefono" value="{{$cliente->telefono}}"><br>

        <label>Producto Menudeo</label><br>
        <input type="text" name="producto_men" placeholder="Producto" value="{{$cliente->producto_men}}"><br>
        
        <br><br><button type="submit" value="enviar">Enviar</button>

    </form>
    
</body>
</html>
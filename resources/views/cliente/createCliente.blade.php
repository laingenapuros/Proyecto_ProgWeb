<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cliente</title>
	</head>
	<body>  
        <main>
            <h1>Formulario Cliente</h1>
            <form action="/cliente" method="POST">
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
                <label>Nombre</label><br>
                <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}"><br>

                <label>Cantidad</label><br>
                <input type="text" name="cantidad" placeholder="Cantidad" value="{{old('cantidad')}}"><br>

                <label>Telefono</label><br>
                <input type="text" name="telefono" placeholder="Telefono" value="{{old('telefono')}}"><br>

                <label>Producto Menudeo</label><br>
                <input type="text" name="producto_men" placeholder="Producto" value="{{old('producto_men')}}"><br>
                
                <br><br><button type="submit" value="enviar">Enviar</button>
            </form>
        </main>
	</body>
</html>
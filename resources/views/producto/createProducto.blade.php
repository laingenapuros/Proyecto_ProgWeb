<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Producto</title>
	</head>
	<body>  
        <main>
            <h1>Formulario Producto</h1>
            <form action="/producto" method="POST">
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

                <label>Precio</label><br>
                <input type="text" name="precio" placeholder="Precio" value="{{old('precio')}}"><br>
                
                <br><br><button type="submit" value="enviar">Enviar</button>
            </form>
        </main>
	</body>
</html>
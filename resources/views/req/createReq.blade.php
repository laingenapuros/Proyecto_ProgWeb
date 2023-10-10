<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Requerimientos</title>
	</head>
	<body>  
        <main>
            <h1>Formulario Requerimiento</h1>
            
            <form action="{{route ('requerimiento.store')}}" method="POST">
           <!-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif-->
                @csrf

                <label for ="identificador">Identificador</label><br>
                <input type="text" name="identificador" placeholder="Nombre" value="{{old('identificador')}}"><br>

                <label for="parrafo">parrafo</label><br>
                <input type="text" name="parrafo" placeholder="Cantidad" value="{{old('parrafo')}}"><br>

                <label for="cliente_id">cliente</label><br>
                <select name="cliente_id">
                    @foreach ($cliente as $cliente)
                        <option value="{{ $cliente-> id}}">
                            {{ $cliente -> nombre}}
                        </option>
                    @endforeach
                </select>
                
                <br><br><button type="submit" value="enviar">Enviar</button>
            </form>
        </main>
	</body>
</html>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> HOLA  EMPLEADO </h1>
    <ul>
        
    @foreach ($empleado as $empleado)
    <a href="{{route('empleado.show', $empleado)}}">
        {{$empleado -> nombre}}
    </a>
    <a href="{{route('empleado.edit', $empleado)}}">
          Editar
    </a>
    <form action ="{{route('empleado.destroy',$empleado)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"> eliminar </button>
</form> 

  
    @endforeach
</ul>
</body>
</html>
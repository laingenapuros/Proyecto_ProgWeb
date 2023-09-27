</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> HOLA  ADMIN</h1>
    <ul>
        
    @foreach ($admin as $admin)
    <a href="{{route('admin.show', $admin)}}">
        {{$admin -> nombre}}
    </a>
    <a href="{{route('admin.edit', $admin)}}">
          Editar
    </a>
    <form action ="{{route('admin.destroy',$admin)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"> eliminar </button>
</form> 

    <!--<li> {{$admin ->nombre}} </li> 
    <li> {{$admin ->correo}} </li>
    <li> {{$admin ->password}} </li>-->
    @endforeach
</ul>
</body>
</html>
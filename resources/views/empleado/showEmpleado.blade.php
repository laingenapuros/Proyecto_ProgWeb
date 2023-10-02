<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowEmpleado</title>
</head>
<body>
    <h1>Show Admin</h1>

    <h2>Nombre Empleado: {{ $empleado->nombre }}</h2>
    <h2>Telefono Empleado: {{ $empleado->telefono }}</h2>
    <h2>Correo Empleado: {{ $empleado->correo }}</h2>
    <h2>Password Empleado: {{ $empleado->password }}</h2>
    
</body>
</html>
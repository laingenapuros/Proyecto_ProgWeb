<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowAdmin</title>
</head>
<body>
    <h1>Show Admin</h1>

    <h2>Nombre Admin: {{ $admin->nombre }}</h2>
    <h2>Correo Admin: {{ $admin->correo }}</h2>
    <h2>Password Admin: {{ $admin->password }}</h2>
    
</body>
</html>
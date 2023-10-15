<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Index Requerimientos</title>
	</head>
	<body>  
        <main>
            <h1>Index Requerimiento</h1>

            <table border = "1">
                <thead>
                    <tr>
                        <th>Norma</th>
                        <th>Identificador</th>
                        <th>Parrafo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reqs as $requerimiento)
                        <tr>
                            <td>{{ $requerimiento ->cliente->id}}</td>
                            <td>{{ $requerimiento ->identificador}}</td>
                            <td>{{ $requerimiento ->parrafo}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </main>
	</body>
</html>
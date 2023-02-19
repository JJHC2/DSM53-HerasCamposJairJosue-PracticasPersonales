<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de municipios de México</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($municipios as $municipio)
                <tr>
                    <td>{{ $municipio->nombre_mun }}</td>
                    <td>{{ $municipio->estado->nombre_est }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
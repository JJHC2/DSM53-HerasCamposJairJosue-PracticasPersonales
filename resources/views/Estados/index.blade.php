<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Estados de México</h1>

<table>
    <thead>
        <tr>
           <td style="color: red">Estado</td>
           <td style="color: blue">Abreviatura</td> 
            </tr>        
    </thead>
    <tbody>
        @foreach ($estados as $estado)
        <tr>
           <td>{{ $estado->nombre_est }}</td>
            <td>{{$estado->abreviatura_est}}</td> 
        </tr>
    </tbody>
    @endforeach
</table>
</ul>
</body>
</html>
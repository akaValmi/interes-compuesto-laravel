<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interes Compuesto</title>
</head>
<body>
    <h1>Interes Compuesto</h1>

    <p>Capital Inicial: {{$capitalInicial}}</p>
    <p>Tasa de Interes: {{$tasaInteres}}</p>
    <p>Plazo: {{$plazo}}</p>

    <table>
        <thead>
            <tr>
                <th>Año</th>
                <th>Capital</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($data); $i++)
            <tr>
                <td>{{$data[$i]['anyo']}}</td>
                <td>{{$data[$i]['capital']}}</td>
            </tr>
            @endfor
        </tbody>
    </table>
</body>
</html>

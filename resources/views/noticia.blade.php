<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Noticia</th>
            </tr>
        </thead>

        <tbody>
            @foreach($noticias as $noticia)
                <tr>
                    <td>{{ $noticia->titulo }}</td>
                    <td>{{ $noticia->noticia }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
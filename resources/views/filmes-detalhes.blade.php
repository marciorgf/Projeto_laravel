<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmes</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <div class="container">

        <p>Nome do filme: {{ $filme->title }}</p>
        <p>Rating: {{ $filme->rating }}</p>
        <p>Duração {{ $filme->length }}</p>

        @isset($filme->genero)
        <p>Gênero: {{ $filme->genero->nameComRanking() }}</p>
        @else
        <p>Gênero: Nenhum gênero informado</p>
        @endisset
        
        @foreach ($filme->atores as $ator)

        <p>{{ $filme->atores }}</p>
        
        @endforeach

    </div>
    
</body>
</html>
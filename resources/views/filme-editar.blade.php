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

        @if (count($errors) > 0)

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        
        </div>
        @endif

       <form class="form-group" action="/filme/editar/{{ $filme->id }}" method="POST">

        @csrf
                
        <label class="mt-2">Nome do Filme</label>
        <input class="form-control mt-2" type="text" name="title" value="{{ $filme->title }}">
        
        <label>Avaliação</label>
        <input class="form-control mt-2" type="number" min=1.0 step=0.1 name="rating" value="{{ $filme->rating }}">
        
        <button class="btn btn-primary btn-sm mt-2" type="submit">Salvar Edição</button>
       
       </form>

    </div>
    
</body>
</html>



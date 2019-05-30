@extends('layouts.app')
@section('content')
    <div class="container">

        <h1 class="mt-3">Lista de filmes</h1>

        <a class="btn btn-primary btn-sm mt-3" href="/filme/adicionar">+ Novo Filme</a>

        <ul class="list-group mt-3">

        @foreach($filmes as $filme)

        <li class="list-group-item">
            <a href="/filmes/{{ $filme->id }}">
            {{ $filme->titleComRating() }}
            </a>

            <a class="btn btn-success btn-sm" href="filme/editar/{{ $filme->id }}">Editar</a>
            <a class="btn btn-danger btn-sm" href="filme/excluir/{{ $filme->id }}">Excluir</a>

        </li>

        @endforeach

        {{ $filmes->links() }}

        </ul>

    </div>
    @endsection
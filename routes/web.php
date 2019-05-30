<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// rota sem parâmetro
Route::get('/hello', function (){
    return 'Hello World';
});

// rota com parâmetro
Route::get('/saudacoes/{nome}', function ($nome){
    return 'Olá ' . $nome;
});

// rota com parâmetro opcional
// para habilitar o parâmetro opcional é preciso utilizar a ?
Route::get('/multiplicacao/{numero1}/{numero2?}', function ($numero1, $numero2 = null){
    if($numero2 != null){
        echo $numero1 * $numero2;
    } else {
        echo 'Faltou o segundo número Paulete';
    }
});

// rota que direciona para view
Route::get('/view', function (){
    return view ('minhaPrimeira');
});

Route::get('/view-parametro/{nome   }', function($nome){
    return view('minhaSegunda')->with('nomeBlade', $nome);
});

Route::get('/possoEntrar/{idade}', function ($idade){
    if($idade >= 18){
        return view('possoEntrar');
    } else {
        echo 'Não pode';
    }
});

Route::get('/filmes', 'FilmesController@exibirTodos')->middleware(['auth', 'admin']);
Route::get('/filmes/{id}', 'FilmesController@exibirDetalhe');

Route::get('/filme/adicionar', 'FilmesController@adicionarFilme');
Route::post('/filme/adicionar', 'FilmesController@salvarFilme');

Route::get('/filme/editar/{id}', 'FilmesController@editarFilme');
Route::POST('/filme/editar/{id}', 'FilmesController@gravarFilme');

Route::get('/filme/excluir/{is}', 'FilmesController@excluirFilme');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
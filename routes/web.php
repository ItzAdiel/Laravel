<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); # view welcome é da página principal
})->name('welcome_routename'); # NOME DA ROTA esta rota sempre que for chamada em qlq lado vai ser através deste nome 


// hello world primeira rota
# se quisermos que a pagina faça um retorno de uma rota /hello
Route::get('/hello', function () {
    return "<h1>Olá, mundo</h1>"; # ao escrever /hello na url retorna isto
});

// primeira view
Route::get('/home', function () {

    return view('utils.homepage'); #return view entra na pasta views e vai buscar o que for definido no parametro

})->name('homepage');

// Rota com variáveis
Route::get('/testevariaveis', function () {

    // Ir à base de dados buscar o login com select* from user where name='Sara';
    $name = 'Leida'; # as plicas retornam literalmente o que está escrito

    // reatribuir valores à variável name
    $name = 'Luísa';

    return "<h5>Variáveis $name </h5>"; # ao escrever /hello na url retorna isto
})->name('testevariaveis');


// Rota com parametros 
# a rota parametro recebe um caminho {} (pode variar), e a funcao que requer o parametro $name
# se escrever /parametros/Software, ao carregar esse caminho, a função que requer $name vai retornar o que foi escrito no caminho
# o que for escrito no caminho aparece na pagina neste caso enquanto variavel 
Route::get('/parametros/{name}', function ($name) {
    return "<h1>Olá $name</h1>"; # ao escrever /hello na url retorna isto
});


// EXERCICIO UTILIZADOR
# "/add_user" é o caminho que aparece no browser para o utilizador
Route::get('/add_user', function () {
    return view('users.add_user'); #pasta view, subpasta users > file: add_user
})->name('users.add');


//O FALLBACK É TIPO UM ELSE
Route::fallback(function () {
    return view('utils.fallback'); # vai buscar view < users < file: add_user
});

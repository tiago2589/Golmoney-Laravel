<?php

use Illuminate\Support\Facades\Route;

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

//aqui uma route é a mesma coisa que uma página nova, a pagina home
Route::get('/', function () {

    $nome = "VARIAVEL";
    $idade = 32;
    $profissao = 'Programador';

    $arr = [551, 02, 03, 04, 05];

    $nomes = ['tiago', 'rodrigo', 'gomes', 'lima'];

    return view('welcome', 
            ['nome' => $nome, 
            'idade' => $idade, 
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes
            ]);
});

//aqui uma route é a mesma coisa que uma página nova, a pagina contact
Route::get('/contact', function () { 
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');//isso é pra quando for buscar um produto

    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id = null) {
    return view('product', ['id' => $id] );
});

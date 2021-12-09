<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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


Route::get('/', [EventController::class, 'index']);//aqui uma route é a mesma coisa que uma página nova, a pagina home index para mostrar todos os registros.
Route::get('/events/create', [EventController::class, 'create']);/* aqui para mostrar o formulario, criar o um registro no banco. */
Route::get('/events/{id}', [EventController::class, 'show']);/* aqui serve para mostrar um dado especifico.  */
Route::post('/events', [EventController::class, 'store']);/* Aqui cria uma rota de POST, para enviar o dado do banco */
Route::get('/contact', function () {//aqui uma route é a mesma coisa que uma página nova, a pagina contact
    return view('contact');
});

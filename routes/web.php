<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livro/novo' , 'App\Http\Controllers\LivrosController@create');
Route::post('/livro/novo' , 'App\Http\Controllers\LivrosController@store')->name('cadastrar_livro');
Route::get('/livro/ver/{id}','App\Http\Controllers\LivrosController@show');
Route::get('livro/editar/{id}','App\Http\Controllers\LivrosController@edit');
Route::put('/livro/editar/{id}', 'App\Http\Controllers\LivrosController@update')->name('alterar_livro');
Route::get('/livro/excluir/{id}','App\Http\Controllers\LivrosController@delete');
Route::delete('/livro/excluir/{id}','App\Http\Controllers\LivrosController@destroy')->name('excluir_livro');

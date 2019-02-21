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


Route::group(['middleware' => 'web'], function () {                             //filtro para acesso às rotas, variaveis de sessão
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');
    Auth::routes();
    Route::resource('admin/pessoa', 'Admin\\PessoaController');
    Route::resource('admin/endereco', 'Admin\\EnderecoController');
    Route::get('/sobre', 'SobreController@index')->name('sobre');
    Route::resource('admin/filme_favorito', 'Admin\\Filme_favoritoController');
});


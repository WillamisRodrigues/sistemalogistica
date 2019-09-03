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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/empresas', function () {
    return view('empresa.index');
});

Route::get('/lancamentos', function () {
    return view('lancamentos.index');
});

Route::get('/materiais', function () {
    return view('materiais.index');
});

Route::get('/baixa', function () {
    return view('baixa.index');
});

Route::get('/unidades', function () {
    return view('unidade.index');
});

Route::get('/adicionar_unidade', function () {
    return view('unidade.create');
});

Route::get('/adicionar_lancamentos', function () {
    return view('lancamentos.create');
});

Route::get('/adicionar_usuario', function () {
    return view('usuarios.create');
});

Route::get('/editar_usuario', function () {
    return view('usuarios.edit');
});

Route::get('/usuarios', function () {
    return view('usuarios.index');
});

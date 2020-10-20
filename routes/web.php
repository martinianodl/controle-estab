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

Route::get('/estabelecimentos', 'EstabelecimentoController@index')->name('listar_estab');
Route::get('/estabelecimentos/create', 'EstabelecimentoController@create');
Route::post('/estabelecimentos', 'EstabelecimentoController@store');
Route::get('/estabelecimentos/{id}/edit', 'EstabelecimentoController@edit');
Route::put('/estabelecimentos/{id}', 'EstabelecimentoController@update');
Route::delete('/estabelecimentos/{id}', 'EstabelecimentoController@destroy');

Route::get('/estabelecimentos/{estabId}/pedidos', 'PedidoController@index')->name('listar_pedidos');
Route::get('/estabelecimentos/{estabId}/pedidos/create', 'PedidoController@create');
Route::post('/estabelecimentos/{estabId}/pedidos', 'PedidoController@store');
Route::get('/estabelecimentos/{estabId}/pedidos/{id}/edit', 'PedidoController@edit');
Route::put('/estabelecimentos/{estabId}/pedidos/{id}', 'PedidoController@update');
Route::delete('/estabelecimentos/{estabId}/pedidos/{id}', 'PedidoController@destroy');


Auth::routes();

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

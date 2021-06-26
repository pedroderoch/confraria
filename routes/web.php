<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// lista todos os associados 
//Route::get('/associado/{id?}', ['uses'=>'AssociadoController@index']);

Route::get('/admin/associados', ['as'=>'admin.associados', 'uses'=>'Admin\AssociadoController@index']);
Route::get('/admin/associados/adicionar', ['as'=>'admin.associados.adicionar', 'uses'=>'Admin\AssociadoController@adicionar']);
Route::post('/admin/associados/salvar',['as'=>'admin.associados.salvar', 'uses'=>'Admin\AssociadoController@salvar']);
Route::get('/admin/associados/teste',['as'=>'admin.associados.teste','uses'=>'Admin\AssociadoController@teste']);
Route::get('/admin/associados/editar/{id}',['as'=>'admin.associados.editar','uses'=>'Admin\AssociadoController@editar']);
Route::put('/admin/associados/atualizar/{id}',['as'=>'admin.associados.atualizar','uses'=>'Admin\AssociadoController@atualizar']);
Route::get('/admin/associados/deletar/{id}',['as'=>'admin.associados.deletar','uses'=>'Admin\AssociadoController@deletar']);

Route::get('/admin/usuarios', ['as'=>'admin.usuarios', 'uses'=>'Admin\UserController@index']);
Route::get('/admin/usuarios/adicionar', ['as'=>'admin.usuarios.adicionar', 'uses'=>'Admin\UserController@adicionar']);
Route::post('/admin/usuarios/salvar', ['as'=>'admin.usuarios.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/admin/usuarios/editar/{id}', ['as'=>'admin.usuarios.editar', 'uses'=>'Admin\UserController@editar']);
Route::put('/admin/usuarios/atualizar/{id}', ['as'=>'admin.usuarios.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/admin/usuarios/deletar/{id}', ['as'=>'admin.usuarios.deletar', 'uses'=>'Admin\UserController@deletar']);

Route::get('/admin/cadastros', ['as'=>'admin.cadastros', 'uses'=>'Admin\CadastroController@index']);


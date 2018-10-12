<?php

Route::get('/', function()
{
    return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('/','ProdutoController@lista');
Route::get('/produtos/mostra/{id?}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo','ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
//Route::get('/login', 'LoginController@form');
//Route::post('/login', 'LoginController@login');




Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
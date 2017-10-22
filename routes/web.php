<?php

//REDES
Route::get('/', 'IpController@index')->name('index');
Route::post('/', 'IpController@search');
Route::get('/home', 'IpController@home')->name('home');
Route::get('/ips/create', 'IpController@create')->name('cadastroip');
Route::post('/ips', 'IpController@store');
Route::get('/ips/{id}', 'IpController@show');
Route::get('/edit/{id}', 'IpController@edit');
Route::post('/edit/{id}','IpController@update');
Route::delete('/delete/{id}','IpController@destroy');

//ATIVOS
Route::get('/ativos', 'AtivoController@index')->name('ativos');
Route::post('/ativos', 'AtivoController@update');
Route::get('/ativos/create', 'AtivoController@create')->name('cadastroativo');
Route::post('/ativos/create', 'AtivoController@store');
Route::get('/ativos/{id}', 'AtivoController@show');
Route::get('/ativos/edit/{id}', 'AtivoController@edit');
Route::post('/ativos/edit/{id}','AtivoController@update');
Route::delete('/ativos/{id}/delete','AtivoController@destroy');

//USUARIOS
Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/edit/{id}', 'UserController@edit');
Route::post('/users/edit/{id}','UserController@update');
Route::delete('/users/delete/{id}','UserController@destroy');
Route::get('/users/password/{id}', 'UserController@password');
Route::post('/users/password/{id}', 'UserController@store');

//INFOS
Route::post('/ips/{id}/infos', 'InfoController@store');
Route::delete('/ips/{id}/delete','InfoController@destroy');
Route::post('/ativos/{id}/infos', 'InfoController@store1');

//PINGS
Route::get('/testaip1/{id}', 'IpController@testaIp1')->name('testaip1');
Route::post('/testaip1', 'IpController@execTestaIp1');
Route::get('/testaip2/{id}', 'IpController@testaIp2')->name('testaip2');
Route::post('/testaip2', 'IpController@execTestaIp2');
Route::get('/testaip', 'IpController@testaIp')->name('testaip');
Route::post('/testaip', 'IpController@execTestaIp');

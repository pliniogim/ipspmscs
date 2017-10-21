<?php
Route::get('/', 'IpController@index')->name('index');
Route::get('/home', 'IpController@home')->name('home');
Route::post('/', 'IpController@search');
Route::get('/ips/create', 'IpController@create')->name('cadastroip');
Route::get('/ativos/create', 'AtivoController@create')->name('cadastroativo');
Route::get('/ativos/{id}', 'AtivoController@edit');
Route::post('/ativos/{id}','AtivoController@update');
Route::delete('/ativos/{id}/delete','AtivoController@destroy');
Route::get('/ips/{id}', 'IpController@show');
Route::post('/ips', 'IpController@store');
Route::post('/ips/{id}/infos', 'InfoController@store');
Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/ajuda', 'AjudaController@index');
Route::get('/edit/{id}', 'IpController@edit');
Route::post('/edit/{id}','IpController@update');
Route::delete('/delete/{id}','IpController@destroy');
Route::delete('/ips/{id}/delete','InfoController@destroy');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/edit/{id}', 'UserController@edit');
Route::post('/users/edit/{id}','UserController@update');
Route::delete('/users/delete/{id}','UserController@destroy');
Route::get('/users/password/{id}', 'UserController@password');
Route::post('/users/password/{id}', 'UserController@store');
Route::get('/ativos', 'AtivoController@index')->name('ativos');
//Route::post('/ativos', 'AtivoController@store');
Route::get('/testaip1/{id}', 'IpController@testaIp1')->name('testaip1');
Route::post('/testaip1', 'IpController@execTestaIp1');
Route::get('/testaip2/{id}', 'IpController@testaIp2')->name('testaip2');
Route::post('/testaip2', 'IpController@execTestaIp2');
Route::get('/testaip', 'IpController@testaIp')->name('testaip');
Route::post('/testaip', 'IpController@execTestaIp');
//use App\Ip;
/*Route::get('/ips', function () {
//$ips = DB::table('ips')->get();
$ips = Ip::all();
return view('ips.index', compact('ips'));
});
*/
/*Route::get('/ips/{id}', function ($id) {
//$ip = DB::table('ips')->find($id);
//dd($ips);
$ip = Ip::find($id);
return view('ips.show', compact('ip'));
});
*/

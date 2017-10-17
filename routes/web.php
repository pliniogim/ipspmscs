<?php
Route::get('/', 'IpController@index');
Route::get('/home', 'IpController@home')->name('home');
Route::post('/', 'IpController@search');
//Route::get('/ips','IpController@index');
Route::get('ips/create', 'IpController@create')->name('cadastroip');
Route::get('/ips/{id}', 'IpController@show');
Route::post('/ips', 'IpController@store');
Route::post('/ips/{id}/infos', 'InfoController@store');
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/ajuda', 'AjudaController@index');
Route::get('/edit/{id}', 'IpController@edit');
Route::post('/edit/{id}','IpController@update');
Route::delete('/delete/{id}','IpController@destroy');
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

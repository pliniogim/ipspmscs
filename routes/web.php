<?php
Route::get('/', 'IpController@index')->name('home');
Route::get('/home', 'IpController@index');
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

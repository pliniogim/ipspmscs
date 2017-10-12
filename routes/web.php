<?php
Route::get('/', 'IpController@index')->name('home');
Route::post('/', 'IpController@search');
//Route::get('/ips','IpController@index');
Route::get('ips/create', 'IpController@create')->name('cadastro');
Route::get('/ips/{id}', 'IpController@show');
Route::post('/ips', 'IpController@store');
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

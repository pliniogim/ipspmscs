<?php
Route::get('/ips','IpController@index');
Route::get('/ips/{id}', 'IpController@show');

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

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

Route::get('/ips', function () {
    $ips = DB::table('ips')->get();
    return view('ips.index', compact('ips'));
});
Route::get('/ips/{id}', function ($id) {
    $ip = DB::table('ips')->find($id);
    //dd($ips);
    return view('ips.show', compact('ip'));
});

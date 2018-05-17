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

Route::get('/signin','ProsesController@createSignIn');
Route::get('/register','ProsesController@createRegister');
Route::post('/register','ProsesController@Register');
Route::get('/dashboard', function() {
    return view('dashboard');
});
Route::get('/pasien/create', function() {
    return view('pasien.create');
});
Route::get('/spesialis/create', function() {
    return view('spesialis.create');
});
Route::get('/rs/create', function() {
    return view('rs.create');
});
Route::get('/dokter/create', function() {
    return view('dokter.create');
});

Route::get('/address/provinsi', 'AddressController@getProvinsi');
Route::get('/address/kota/{id}', 'AddressController@getKota');
Route::get('/address/kecamatan/{id}', 'AddressController@getKecamatan');
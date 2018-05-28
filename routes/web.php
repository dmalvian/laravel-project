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
Route::get('/','ProsesController@index');
Route::get('/signin','ProsesController@createSignIn');
Route::post('/signin','ProsesController@signin');
Route::get('/register','ProsesController@createRegister');
Route::post('/register','ProsesController@Register');
Route::get('/logout','ProsesController@getLogout');
Route::get('/dashboard','ProsesController@gotoDashboard');
Route::get('/pasien/create','ProsesController@createPasien');
Route::post('/pasien/create','ProsesController@storePasien');
Route::get('/pendaftaran', 'ProsesController@createPendaftaran');
Route::post('/pendaftaran','ProsesController@pendaftaran');
Route::post('/konfirmasi','ProsesController@storePendaftar');

//get json provinsi, kota, kecamatan
Route::get('/address/provinsi', 'AddressController@getProvinsi');
Route::get('/address/kota/{id}', 'AddressController@getKota');
Route::get('/address/kecamatan/{id}', 'AddressController@getKecamatan');

//get json rumah sakit, spesialis
Route::get('/medic/rs', 'MedicController@getRS');
Route::get('/medic/spesialis/{id}', 'MedicController@getSpesialis');
Route::get('/medic/dokter/{id}', 'MedicController@getDokter');

// get json pasien
Route::get('/patient','ProsesController@patient');

// Area Admin
Route::get('admin','AdminController@createsignIn');
Route::post('admin','AdminController@signIn');
Route::get('admin/dashboard','AdminController@dashboard');
Route::get('logout','AdminController@logout');

Route::get('/spesialis/create', function() {
    return view('spesialis.create');
});
Route::get('/rs/create', function() {
    return view('rs.create');
});
Route::get('/dokter/create', function() {
    return view('dokter.create');
});

Route::get('qr-code/{id}', function ($id) {
  return QRCode::text($id)->setSize(8)->png();
});

Route::get('qr', function () {
    return view('result');
});

Route::get('pasien', 'ProsesController@indexPasien');

Route::get('guide', function() {
    return view('guide');
});
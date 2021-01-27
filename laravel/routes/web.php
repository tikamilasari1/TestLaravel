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

Route::get('/', function () {
    return view('home');
});


//login
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');


//dashboard
Route::get('/dashboard','controllerDashboard@index')->middleware('auth');

//Barang
Route::get('/barang','controllerBarang@index')->middleware('auth');
Route::post('/barang/create','controllerBarang@create')->middleware('auth');
Route::get('/barang/{id}/edit','controllerBarang@edit')->middleware('auth');
Route::post('/barang/{id}/update','controllerBarang@update')->middleware('auth');
Route::get('/barang/{id}/delete','controllerBarang@delete')->middleware('auth');

//customer
Route::get('/customer','controllerCustomer@index')->middleware('auth');
Route::post('/customer/create','controllerCustomer@create')->middleware('auth');
Route::get('/customer/{id}/edit','controllerCustomer@edit')->middleware('auth');
Route::post('/customer/{id}/update','controllerCustomer@update')->middleware('auth');
Route::get('/customer/{id}/delete','controllerCustomer@delete')->middleware('auth');

//penjualan
Route::get('/penjualanbarang','controllerPenjualanbarang@index')->middleware('auth');
Route::post('/penjualanbarang/create','controllerPenjualanbarang@create')->middleware('auth');
Route::get('/penjualanbarang/{id}/edit','controllerPenjualanbarang@edit')->middleware('auth');
Route::post('/penjualanbarang/{id}/update','controllerPenjualanbarang@update')->middleware('auth');
Route::get('/penjualanbarang/{id}/delete','controllerPenjualanbarang@delete')->middleware('auth');


//transaksi
Route::get('/detailtransaksi','controllerDetailTransaksi@index')->middleware('auth');
Route::post('/detailtransaksi/create','controllerDetailTransaksi@create')->middleware('auth');
Route::get('/detailtransaksi/{id}/edit','controllerDetailTransaksi@edit')->middleware('auth');
Route::post('/detailtransaksi/{id}/update','controllerDetailTransaksi@update')->middleware('auth');
Route::get('/detailtransaksi/{id}/delete','controllerDetailTransaksi@delete')->middleware('auth');

//hadiah
Route::get('/hadiah','controllerHadiah@index')->middleware('auth');
Route::post('/hadiah/create','controllerHadiah@create')->middleware('auth');
Route::get('/hadiah/{id}/edit','controllerHadiah@edit')->middleware('auth');
Route::post('/hadiah/{id}/update','controllerHadiah@update')->middleware('auth');
Route::get('/hadiah/{id}/delete','controllerHadiah@delete')->middleware('auth');
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function (){
    Route::get('/',function () {
        return 'ini halaman utama admin';
    });

    Route::get('/barang',function () {
        return 'ini halaman barang';
    });

    Route::get('/jasa',function () {
        return 'ini halaman jasa';
    });
    
});


Route::group(['prefix' => 'manager', 'middleware' => 'auth'],function (){
    Route::get('/',function () {
        return 'ini halaman utama manager';
    });

    Route::get('/pemasukan',function () {
        return 'ini halaman pemasukan keuangan perusahaan';
    });

    Route::get('/pengeluaran',function () {
        return 'ini halaman pengeluaran keuangan perusahaan';
    });
});


Route::group(['prefix' => 'karyawan', 'middleware' => 'auth'],function (){
    Route::get('/',function () {
        return 'ini halaman utama karyawan';
    });

    Route::get('/pembelian',function () {
        return 'ini halaman pembelian barang dan jasa';
    });

    Route::get('/penjualan',function () {
        return 'ini halaman penjualan barang dan jasa';
    });
});

<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::resource('jenis_barang','JenisbarangController');
Route::resource('barang','BarangController');
Route::resource('transaksi','TransaksiController');
Route::post('search','TransaksiController@search');
Route::get('print','TransaksiController@print')->name('print');
Route::resource('rekap','RekappenjualanController');
Route::post('search_rekap','RekappenjualanController@search_rekap');
Route::get('/','RekappenjualanController@rekap_penjualan');
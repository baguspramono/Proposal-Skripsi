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
//     return view('welcome');
// });

Route::get('/beranda', 'BerandaController@index')->name('beranda');

//route member
Route::get('/data-member', 'MemberController@index')->name('data-member');
Route::get('/create-member', 'MemberController@create')->name('create-member');
Route::post('/simpan-member', 'MemberController@store')->name('simpan-member');
Route::get('/edit-member/{id}', 'MemberController@edit')->name('edit-member');
Route::post('/update-member/{id}', 'MemberController@update')->name('update-member');
Route::get('/delete-member/{id}', 'MemberController@destroy')->name('delete-member');

//route barang
Route::get('/data-barang', 'BarangController@index')->name('data-barang');
Route::get('/create-barang', 'BarangController@create')->name('create-barang');
Route::post('/simpan-barang', 'BarangController@store')->name('simpan-barang');
Route::get('/edit-barang/{id}', 'BarangController@edit')->name('edit-barang');
Route::post('/update-barang/{id}', 'BarangController@update')->name('update-barang');
Route::get('/delete-barang/{id}', 'BarangController@destroy')->name('delete-barang');

//route kurir
Route::get('/data-kurir', 'KurirController@index')->name('data-kurir');
Route::get('/create-kurir', 'KurirController@create')->name('create-kurir');
Route::post('/simpan-kurir', 'KurirController@store')->name('simpan-kurir');
Route::get('/edit-kurir/{id}', 'KurirController@edit')->name('edit-kurir');
Route::post('/update-kurir/{id}', 'KurirController@update')->name('update-kurir');
Route::get('/delete-kurir/{id}', 'KurirController@destroy')->name('delete-kurir');

//route mobil
Route::get('/data-mobil', 'MobilController@index')->name('data-mobil');
Route::get('/create-mobil', 'MobilController@create')->name('create-mobil');
Route::post('/simpan-mobil', 'MobilController@store')->name('simpan-mobil');
Route::get('/edit-mobil/{id}', 'MobilController@edit')->name('edit-mobil');
Route::post('/update-mobil/{id}', 'MobilController@update')->name('update-mobil');
Route::get('/delete-mobil/{id}', 'MobilController@destroy')->name('delete-mobil');

//route cabang
Route::get('/data-cabang', 'CabangController@index')->name('data-cabang');
Route::get('/create-cabang', 'CabangController@create')->name('create-cabang');
Route::post('/simpan-cabang', 'CabangController@store')->name('simpan-cabang');
Route::get('/edit-cabang/{id}', 'CabangController@edit')->name('edit-cabang');
Route::post('/update-cabang/{id}', 'CabangController@update')->name('update-cabang');
Route::get('/delete-cabang/{id}', 'CabangController@destroy')->name('delete-cabang');

//route jalur
Route::get('/data-expedisi', 'ExpedisiController@index')->name('data-expedisi');
Route::get('/create-expedisi', 'ExpedisiController@create')->name('create-expedisi');
Route::post('/simpan-expedisi', 'ExpedisiController@store')->name('simpan-expedisi');
Route::get('/edit-expedisi/{id}', 'ExpedisiController@edit')->name('edit-expedisi');
Route::post('/update-expedisi/{id}', 'ExpedisiController@update')->name('update-expedisi');
Route::get('/delete-expedisi/{id}', 'ExpedisiController@destroy')->name('delete-expedisi');

//route jalur
Route::get('/data-jalur', 'JalurController@index')->name('data-jalur');
Route::get('/create-jalur', 'JalurController@create')->name('create-jalur');
Route::post('/simpan-jalur', 'JalurController@store')->name('simpan-jalur');
Route::get('/edit-jalur/{id}', 'JalurController@edit')->name('edit-jalur');
Route::post('/update-jalur/{id}', 'JalurController@update')->name('update-jalur');
Route::get('/delete-jalur/{id}', 'JalurController@destroy')->name('delete-jalur');

//route Service
Route::get('/data-service', 'ServiceController@index')->name('data-service');
Route::get('/create-service', 'ServiceController@create')->name('create-service');
Route::post('/simpan-service', 'ServiceController@store')->name('simpan-service');
Route::get('/edit-service/{id}', 'ServiceController@edit')->name('edit-service');
Route::post('/update-service/{id}', 'ServiceController@update')->name('update-service');
Route::get('/delete-service/{id}', 'ServiceController@destroy')->name('delete-service');

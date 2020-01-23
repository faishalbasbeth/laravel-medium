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

//encrypt dan decrypt
Route::get('/enkripsi', 'DikiController@enkripsi');
Route::get('/data/', 'DikiController@data');
Route::get('/data/{data_rahasia}', 'DikiController@data_proses');

//hashing
Route::get('/hash', 'DikiController@hash');

//upload file
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

//hapus file
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

//session
Route::get('/session/tampil','TesController@tampilkanSession');
Route::get('/session/buat','TesController@buatSession');
Route::get('/session/hapus','TesController@hapusSession');

//notifikasi dengan session
Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');

//eror handlinf
// Route::get('/malasngoding','MalasngodingController@index');

//kirim email
Route::get('/kirimemail','MalasngodingController@index');
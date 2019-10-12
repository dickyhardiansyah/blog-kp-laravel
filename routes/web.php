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

//pages controller
Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('/profil', 'PagesController@profil');
Route::get('/informasi', 'PagesController@informasi');
Route::get('/pendaftaran', 'PagesController@pendaftaran');
Route::get('/kontak', 'PagesController@kontak');

//read controller
//--------- informasi
Route::get('/draft-kaldik-2019-2020-smp-depok', 'ReadController@informasiPertama');
Route::get('/informasi-pendaftaran-smp-ganesa-satria-2019-1020', 'ReadController@Pendaftaran');
//--------- profil
Route::get('/mendirikan-perguruan-yayasan-ganesa-satria', 'ReadController@sejarah');
Route::get('/smp-ganesa-satria-depok-juara-pertama-lomba-pmr-madya', 'ReadController@prestasiPertama');
//--------- ekstra
Route::get('/galeri-ekstra-pramuka', 'ReadController@ekstraPramuka');
Route::get('/galeri-ekstra-paskibra', 'ReadController@ekstraPaskibra');

//pendaftaran controller
Route::get('/formpendaftaran', 'PendaftaranController@index');
Route::get('/form-pendaftaran/tambah', 'PendaftaranController@tambah');
Route::post('/form-pendaftaran/proses','PendaftaranController@proses');

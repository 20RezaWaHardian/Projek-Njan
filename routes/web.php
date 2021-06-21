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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'WelcomeController@index');
Route::get('/show/sw/welcome', 'WelcomeController@swShow');
Route::get('/show/iw/welcome', 'WelcomeController@iwShow');
Route::get('/show/klaim/welcome', 'WelcomeController@klaimShow');
Route::get('/show/uang/welcome', 'WelcomeController@uangShow');

Route::get('/user', 'UserController@index')->name('user');
Route::get('/user/tambah', 'UserController@tambah');
Route::post('/user/tambah/data', 'UserController@dataTambah');
Route::patch('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/hapus/{id}', 'UserController@destroy')->name('user.destroy');
// Route::delete('/user/hapus/{id}', 'UserController@destroy')->name('user.destroy');

//sw
Route::get('/sw', 'SwController@index')->name('sw');
Route::get('/iw', 'SwController@iwIndex')->name('iw');
Route::get('/klaim', 'SWController@klaimIndex')->name('klaim');
Route::get('/keuangan', 'SWController@uangIndex')->name('uang');
Route::get('/korban', 'SwController@korbanIndex')->name('korban');
Route::get('/korban/tambahKorban', 'SWController@addKorban')->name('tambahKorban');
Route::get('/tambahData', 'SwController@add')->name('tambahData');
Route::get('/show/sw', 'SWController@swShow');
Route::get('/show/iw', 'SWController@iwShow');
Route::get('/show/klaim', 'SWController@klaimShow');
Route::get('/show/uang', 'SWController@uangShow');
Route::post('/korban/tambah', 'SWController@tambahKorban');
Route::post('/sw/import_excel', 'SwController@import_excel');
Route::get('/sw/{sw_id}/edit', 'SWController@edit');
Route::get('/iw/{iw_id}/editiw', 'SWController@editIW');
Route::get('/klaim/{id_klaim}/editklaim', 'SWController@editKlaim');
Route::get('/keuangan/{id_keuangan}/edituang', 'SWController@editUang');
Route::get('/korban/{id}/editkorban', 'SWController@editKorban');
Route::patch('/sw/{sw_id}', 'SwController@swUpdate');
Route::patch('/iw/{iw_id}', 'SWController@iwUpdate');
Route::patch('/klaim/{id_klaim}', 'SWController@klaimUpdate');
Route::patch('/keuangan/{id_keuangan}', 'SWController@uangUpdate');
Route::patch('/korban/{id}', 'SWController@korbanUpdate');
Route::get('/sw/hapus/{sw_id}', 'SwController@hapusSw');
Route::get('/iw/hapus/{iw_id}', 'SwController@hapusIw');
Route::get('/klaim/hapus/{id_klaim}', 'SWController@hapusKlaim');
Route::get('/keuangan/hapus/{id_keuangan}', 'SWController@hapusUang');
Route::get('/korban/hapus/{id}', 'SWController@hapusKorban');

//fullcalender
Route::get('/fullcalendar','FullCalendarController@index');
// Route::get('/','FullCalendarController@index_home');
Route::post('fullcalendar/create','FullCalendarController@create');
Route::post('fullcalendar/update','FullCalendarController@update');
Route::post('fullcalendar/delete','FullCalendarController@destroy');
// Route::get('fullcalender', [FullCalendarController::class, 'index']);
// Route::post('fullcalenderAjax', [FullCalendarController::class, 'ajax']);

//gambar
Route::get('/gambar','GambarController@index');
Route::get('/kelolagambar','GambarController@kelolaIndex');
Route::get('/gambar/{id_gambar}/edit', 'GambarController@edit');
Route::post('/addGambar','GambarController@store')->name('addGambar');
Route::PATCH('/gambar', 'GambarController@update')->name('updateGambar');
Route::get('/gambar/hapus/{id_gambar}', 'GambarController@destroy');


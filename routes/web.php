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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/register', function(){
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('daftar', 'PendaftaranController@store')->name('store');
Route::get('/siswa/edit/{id}', 'HomeController@edit')->name('siswa.edit');
Route::get('/siswa/delete/{id}', 'HomeController@delete')->name('siswa.delete');
Route::put('/siswa/update', 'HomeController@update')->name('siswa.update');
Route::get('/siswa/pdf/{id}', 'HomeController@pdf')->name('siswa.pdf');

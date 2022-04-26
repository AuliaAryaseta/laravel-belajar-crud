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

Route::get('/', 'ControllerPerpustakaan@welcome');
Route::get('/tentang', 'ControllerPerpustakaan@tentang');
Route::get('/domaindanhosting', 'ControllerPerpustakaan@domaindanhosting');

Route::get('/buku', 'ControllerBuku@index');
Route::get('/buku/create', 'ControllerBuku@create')->name('buku.create');
Route::post('/buku/store', 'ControllerBuku@store')->name('routeStore');
Route::post('/buku/destroy/{id}', 'ControllerBuku@destroy')->name('buku.destroy');
Route::get('/buku/edit/{id}', 'ControllerBuku@edit')->name('buku.edit');
Route::post('/buku/update/{id}', 'ControllerBuku@update')->name('buku.update');
Route::get('/buku/search', 'ControllerBuku@search')->name('buku.search');
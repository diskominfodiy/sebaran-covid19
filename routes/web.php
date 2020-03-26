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

Route::get('/', 'ViewController@index')->name('home');
Route::get('kodepos', 'ViewController@kodePos')->name('kode.pos');
Route::post('result', 'ViewController@result')->name('result');
Route::get('resultmaps', 'ViewController@resultbycoord')->name('resultmaps');
Route::post('getcoordRadius', 'ViewController@getcoordRadius')->name('getcoordradius');

// Upload Data DIY
Route::get('upload', 'UploadController@index');
Route::post('upload', 'UploadController@importData')->name('upload');

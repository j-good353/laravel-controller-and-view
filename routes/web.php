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

Route::get('/', 'KampusController@beranda')->name('home');
Route::get('/profile', 'KampusController@profile')->name('profile');
Route::get('/info-kampus', 'KampusController@index')->name('info-kampus');
Route::get('/informasi-kampus', 'KampusController@index');




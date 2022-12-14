<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::group(['namespace'=>'Kelompok5\GeneratorJadwalSholat\Http\Controllers'], function() {
    Route::get('jadwalSalat', 'JadwalController@jadwalSalat')->name('jadwalSalat');
    Route::post('jadwalSalat', 'JadwalController@send')->name("jadwalSalat.post");
});
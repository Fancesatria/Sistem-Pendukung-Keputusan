<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

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

Route::get('coba', 'App\Http\Controllers\CobaController@index')->name('user');
Route::get('sipenma', 'App\Http\Controllers\SipenmaController@index')->name('');
Route::get('bmi', 'App\Http\Controllers\BmiController@index')->name('');
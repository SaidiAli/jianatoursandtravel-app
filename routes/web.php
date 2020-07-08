<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->name('welcome');

Route::get('/hotels', function () {
    return view('pages.hotels');
})->name('hotels');

Route::get('/tours', function () {
    return view('pages.tours');
})->name('tours');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

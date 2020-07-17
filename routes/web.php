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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/tours', 'PagesController@tours')->name('tours');

Route::get('/hotels', 'PagesController@hotels')->name('hotel.index');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::resource('/hotel', 'HotelController')->except(['index']);
    Route::resource('/booking', 'BookingController')->only(['store']);
});

Route::get('/test' , function() {
    dd('test completed');
});

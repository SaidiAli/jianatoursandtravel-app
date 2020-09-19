<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Static Pages

Route::get('/', 'PagesController@home')->name('home');
Route::get('/tours', 'PagesController@tours')->name('tours');
Route::get('/hotels', 'PagesController@hotels')->name('hotel.index');
Route::get('/car-hire-and-sale', 'PagesController@car_hire_and_sale')->name('car-hire-and-sale');
Route::get('/car-preview', 'PagesController@car_preview')->name('car_preview');

// Auth routes
Auth::routes(['verify' => true]);

// Protected Routes
Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::resource('/hotel', 'HotelController')->only(['create', 'store', 'destroy', 'edit', 'update']);
    Route::resource('/booking', 'BookingController')->only(['store', 'show']);
    Route::resource('/payment', 'PaymentController')->only(['index']);
    Route::resource('/room', 'RoomController')->only(['store']);
    Route::resource('/cars', 'CarsController');
    Route::get('/hotels/management', 'HotelsManagement@manage')->name('hotels.manage');
    Route::get('/hotels/preview/{hotel}', 'HotelsManagement@preview')->name('hotels.preview');
    Route::get('/hotels/add_images/{hotel}', 'HotelsManagement@add_images')->name('hotels.add_images');
    Route::put('/hotels/add_images/{hotel}', 'HotelsManagement@update_cover_images')->name('hotels.update_cover_images');

    
    Route::get('admin', 'AdminController@index');
});

// Open Routes
Route::resource('/hotel', 'HotelController')->only(['show']);
Route::get('/hotels/search', 'HotelsManagement@linkSearch')->name('hotels.search');

// Admin Routes
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    Route::get('/dashboard', 'SuperAdminController@index')->name('admin.index');
    Route::get('/facilities/add', 'SuperAdminController@facilities_add')->name('facilities.add');
});

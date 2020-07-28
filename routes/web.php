<?php

use App\Events\TestEvent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;

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

Route::get('/test', function() {
    Event::dispatch(new TestEvent);
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::resource('/hotel', 'HotelController')->except(['index']);
    Route::resource('/booking', 'BookingController')->only(['store', 'show']);
    Route::resource('/payment', 'PaymentController')->only(['index']);
    Route::resource('/room', 'RoomController')->only(['store']);
    Route::get('/hotels/management', 'HotelsManagement@manage')->name('hotels.manage');
    Route::get('/hotels/preview/{hotel}', 'HotelsManagement@preview')->name('hotels.preview');
});

<?php

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

Route::get('', 'PageController@index')->name('front.index');
Route::get('about', 'PageController@about')->name('front.about');
Route::get('contacts', 'PageController@contacts')->name('front.contacts');
Route::post('contacts', 'PageController@sendMessage')->name('front.sendMessage');
Route::get('events', 'PageController@events')->name('front.events');
Route::get('bookings', 'BookController@bookings')->name('front.bookings');
Route::get('bookings/{id}', 'BookController@booking')->name('front.booking');
Route::post('bookings/reserve', 'BookController@reserveBook')->name('front.reserveBook');
Route::get('books', 'BookController@index')->name('front.books');
Route::get('books/{id}', 'BookController@show')->name('front.book');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('', 'Admin\HomeController@index')->name('admin.home');
    Route::resource('books', 'Admin\BookController');
    Route::resource('genres', 'Admin\GenreController');
    Route::resource('authors', 'Admin\AuthorController');
    Route::resource('reservations', 'Admin\ReservationController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

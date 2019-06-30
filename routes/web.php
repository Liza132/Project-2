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

Route::get('/', 'PageController@index')->name('front.index');
Route::get('/about', 'PageController@about')->name('front.about');
Route::get('/contacts', 'PageController@contacts')->name('front.contacts');
Route::get('/events', 'PageController@events')->name('front.events');
Route::get('/bookings', 'PageController@bookings')->name('front.bookings');
Route::get('/books', 'BookController@index')->name('front.books');

Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');
Route::resource('/admin/books', 'Admin\BookController');
Route::resource('/admin/genres', 'Admin\GenreController');
Route::resource('/admin/authors', 'Admin\AuthorController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

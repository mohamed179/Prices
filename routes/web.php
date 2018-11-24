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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/**
 * User group of routes
 */
Route::middleware(['auth'])->group(function () {
    Route::get('/items', 'ItemController@index')->name('items');

    Route::get('/categories', 'CategoryController@index')->name('categories');

    Route::post('/search', 'SearchController@index')->name('search');
});

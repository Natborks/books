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

Route::get('/', function () {
    return view('layouts.layout');
});

Route::get('/index', 'BooksController@index');

Route::get('/book/{isbn}', 'BooksController@show');

Route::post('/book/{book}/reviews', 'ReviewsController@store');


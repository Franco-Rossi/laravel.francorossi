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
    return view('welcome');
});

Route::get('/en', function () {
    return view('english');
});

Auth::routes([ 'register' => false ]);

Route::get('/admin', 'AdminController@index')->name('admin');

Route::post('/contact-us','ContactUsController@contactUsPost');


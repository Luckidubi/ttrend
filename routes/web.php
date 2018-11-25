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

Route::get('pages/about', 'PagesController@about')->name('pages.about');
Route::get('pages/services', 'PagesController@services')->name('pages.services');

Route::get('pages/contact', 'PagesController@contact')->name('pages.contact');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/Dashboard', 'DashboardController@index');

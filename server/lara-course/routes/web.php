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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('categories', 'CategoryController');

Route::resource('comments', 'CommentController');

Route::resource('courses', 'CourseController');

Route::resource('courseUsers', 'CourseUserController');

Route::resource('items', 'ItemController');

Route::resource('payments', 'PaymentController');

Route::resource('users', 'UserController');

Route::resource('views', 'ViewController');
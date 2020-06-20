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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('categories', 'CategoryController');

Route::resource('comments', 'CommentController');


// Courses Routes
Route::resource('courses', 'CourseController');
Route::post('courses/disapprove', 'CourseController@disapprove')->name('courses.disapprove');
Route::post('courses/approve', 'CourseController@approve')->name('courses.approve');
//publish/unpublish
Route::post('courses/publishCourse', 'CourseController@publishCourse')->name('courses.publishCourse');
Route::post('courses/unpublishCourse', 'CourseController@unpublishCourse')->name('courses.unpublishCourse');


Route::resource('courseUsers', 'CourseUserController');

Route::resource('items', 'ItemController');

Route::resource('payments', 'PaymentController');

Route::resource('users', 'UserController');

Route::resource('views', 'ViewController');

Route::resource('roles', 'RoleController');

Route::resource('coupons', 'CouponController');

Route::resource('courseUsers', 'CourseUserController');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::post('/payment/callback', 'PaymentController@handleGatewayCallback')->name('paymentCallback');
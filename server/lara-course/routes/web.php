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




Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

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

//content
Route::get('courses/contents/{course_id}', 'CourseController@contents')->name('courses.contents');

Route::resource('courseUsers', 'CourseUserController');

Route::resource('items', 'ItemController');

Route::resource('payments', 'PaymentController');

Route::resource('users', 'UserController');

Route::resource('views', 'ViewController');

Route::resource('roles', 'RoleController');

Route::resource('coupons', 'CouponController');

Route::resource('courseUsers', 'CourseUserController');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback')->name('paymentCallback');





//we re going to chanhe {Auth::routes();} whith these line bellow 
/*Route::group(['prefix' => 'admin','namespace' => 'Auth'],function(){
    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
    Route::post('password/reset', 'ResetPasswordController@reset');
});*/
//reset password 
Route::post('/password/reset', 'Auth\PasswordController@reset');
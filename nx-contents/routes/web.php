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


/*-----------------------------------------------------------------------------------------------------
|default laravel auth routes with removed unnecessary routes
|------------------------------------------------------------------------------------------------------
*/
Route::group(['namespace' => 'Auth'], function () {

    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@userLogout')->name('logout');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/reset', 'ResetPasswordController@reset');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    //Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    //Route::post('/register', 'Auth\RegisterController@register');

});


Route::get('/', function () {
    return view('welcome');
});



/*-----------------------------------------------------------------------------------------------------
|all admin routes
|------------------------------------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function() {

    /*-------------------------------------------------------------------------------------------------
    |allowed only when admins are not logged in
    |--------------------------------------------------------------------------------------------------
    */
    Route::group(['namespace' => 'Auth'], function () {

        //login routes
        Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');

        //forgot password & reset
        Route::post('password/email', 'AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::get('password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::post('password/reset', 'AdminResetPasswordController@reset');
        Route::get('password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    });



    /*-------------------------------------------------------------------------------------------------
	|admin access routes only if they are logged in
	|--------------------------------------------------------------------------------------------------
	*/
    Route::middleware(['auth:admin'])->group(function() {

    	Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    });
    
});

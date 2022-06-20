<?php

use \Illuminate\Support\Facades\Route;


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
// Super admin Routes
Route::group(['prefix' => 'super-admin', 'namespace' => 'SuperAdmin', 'middleware' => 'auth'], function () {
    Route::get('/manager-dashboard', 'ManagerDashboardController@index')->name('super-admin.manager-dashboard')->middleware('auth');
});

// Admin Routes
Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard')->middleware('auth');
    // GeoTechnics Routes
    Route::group(['prefix' => 'geotechnics'], function () {
        Route::get('/create', 'GeoTechnicsController@create')->name('admin.geotechnics.create');
    });

    // weldings Routes
    Route::group(['prefix' => 'weldings'], function () {
        Route::get('/create', 'WeldingsController@create')->name('admin.weldings.create');
    });
// concrete Routes
    Route::group(['prefix' => 'concretes'], function () {
        Route::get('/create', 'ConcretesController@create')->name('admin.concretes.create');
    });

    // registered-files Routes
        Route::get('/registered-files', 'RegisteredController@index')->name('admin.registered.index');

});





// auth Routes
Route::group(['prefix' => 'auth', 'namespace' => 'auth'], function () {
    Route::get('/register', 'RegisterController@registerForm')->name('auth.register.form');
    Route::get('/login', 'LoginController@loginForm')->name('auth.login.form');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    Route::get('/send-code', 'LoginController@sendCode')->name('auth.send.code');
    Route::get('/logout', 'LoginController@logout')->name('auth.logout');

});

// zinzer Routes

Route::group(['prefix' => 'zinzer', 'namespace' => 'zinzer'], function () {
    Route::view('/home', '/zinzer/home')->name('zinzer.home');
    Route::view('/contact', '/zinzer/contact')->name('zinzer.contact');
    Route::view('/about', '/zinzer/about')->name('zinzer.about');

});




















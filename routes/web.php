<?php

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SuperAdmin\AboutController;
use \App\Http\Controllers\SuperAdmin\ContactController;
use \App\Http\Controllers\SuperAdmin\HomeController;
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
    Route::post('/register', 'RegisterController@register')->name('auth.register');

    Route::get('/login', 'LoginController@loginForm')->name('auth.login.form');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    Route::get('/send-code', 'LoginController@sendCode')->name('auth.send.code');
    Route::get('/logout', 'LoginController@logout')->name('auth.logout');

});



// zinzer Routes

Route::group(['prefix' => 'zinzer', 'namespace' => 'zinzer'], function () {
    Route::view('/home', '/zinzer/home')->name('zinzer.home');
    Route::view('/contact', '/zinzer/contact')->name('zinzer.contact');

});

// about Routes

Route::get('zinzer/about', [AboutController::class,'show'])->name('zinzer.about');
Route::get('/super-admin/about',[AboutController::class,'index']);
Route::get('/super-admin/about/create',[AboutController::class,'create']);
Route::post('/super-admin/about/create',[AboutController::class,'store']);
Route::get('/super-admin/about/{id}/edit',[AboutController::class,'edit']);
Route::put('/super-admin/about/{id}',[AboutController::class,'update']);


// contact Routes
Route::get('zinzer/contact', [ContactController::class,'show'])->name('zinzer.contact');
Route::get('/super-admin/contact',[ContactController::class,'index']);
Route::get('/super-admin/contact/create',[ContactController::class,'create']);
Route::post('/super-admin/contact/create',[ContactController::class,'store']);
Route::get('/super-admin/contact/{id}/edit',[ContactController::class,'edit']);
Route::put('/super-admin/contact/{id}',[ContactController::class,'update']);


// home Routes
Route::get('/', [HomeController::class,'show']);
Route::get('/zinzer/home', [HomeController::class,'show'])->name('zinzer.home');
Route::get('/super-admin/home',[HomeController::class,'index']);
Route::get('/super-admin/home/create',[HomeController::class,'create']);
Route::post('/super-admin/home/create',[HomeController::class,'store']);
Route::get('/super-admin/home/{id}/edit',[HomeController::class,'edit']);
Route::put('/super-admin/home/{id}',[HomeController::class,'update']);
Route::delete('super-admin/home/{id}', [HomeController::class,'destroy'])->name('home.delete')->middleware('auth');

// article Routes
Route::get('super-admin/article', [\App\Http\Controllers\SuperAdmin\ArticleController::class,'index'])->name('article.index');
Route::get('zinzer/article', [\App\Http\Controllers\SuperAdmin\ArticleController::class,'show'])->name('zinzer.article');
Route::get('super-admin/article/{id}/edit', [\App\Http\Controllers\SuperAdmin\ArticleController::class,'edit'])->name('article')->middleware('auth');
Route::put('super-admin/article/{id}', [\App\Http\Controllers\SuperAdmin\ArticleController::class,'update'])->name('article.update')->middleware('auth');
Route::get('super-admin/article/create', [\App\Http\Controllers\SuperAdmin\ArticleController::class,'create'])->name('article.create')->middleware('auth');
Route::post('super-admin/article', [\App\Http\Controllers\SuperAdmin\ArticleController::class,'store'])->name('article.store')->middleware('auth');
Route::delete('super-admin/article/{id}', [\App\Http\Controllers\SuperAdmin\ArticleController::class,'destroy'])->name('article.delete')->middleware('auth');


// news Routes
Route::get('super-admin/news', [\App\Http\Controllers\SuperAdmin\NewsController::class,'index'])->name('news.index');
Route::get('zinzer/news', [\App\Http\Controllers\SuperAdmin\NewsController::class,'show'])->name('zinzer.news');
Route::get('super-admin/news/{id}/edit', [\App\Http\Controllers\SuperAdmin\NewsController::class,'edit'])->name('news')->middleware('auth');
Route::put('super-admin/news/{id}', [\App\Http\Controllers\SuperAdmin\NewsController::class,'update'])->name('news.update')->middleware('auth');
Route::get('super-admin/news/create', [\App\Http\Controllers\SuperAdmin\NewsController::class,'create'])->name('news.create')->middleware('auth');
Route::post('super-admin/news', [\App\Http\Controllers\SuperAdmin\NewsController::class,'store'])->name('news.store')->middleware('auth');
Route::delete('super-admin/news/{id}', [\App\Http\Controllers\SuperAdmin\NewsController::class,'destroy'])->name('news.delete')->middleware('auth');




Route::get('/aa',function (Request $request)
{ $mobile = $request->input('mobile');
    $type[]=User::query()->select('type')->where('mobile', $mobile)->get();
dd($type);

});











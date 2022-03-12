<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/login', 'LoginDashboardController@showLoginForm')->name('dashboard.login');
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/home', 'DashboardController@index')->name(('dashboard.index'));
        Route::get('/file-manager', 'DashboardController@fileManager')->name('dashboard.file-manager');
        Route::resources([
            'category' => 'CategoryController',
            'order' => 'OrderController',
            'product' => 'ProductController',
            'user' => 'UserController',
            'coupon' => 'CouponController',
            'author' => 'AuthorController',
            'language' => 'LanguageController',
            'publisher' => 'PublisherController',
          ]);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::group(['as' => 'shop.'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'HomeController@showAbout')->name('about');

    Route::get('/search', 'HomeController@search')->name('search');

    Route::get('/products', 'HomeController@showProducts')->name('product-list');
    Route::get('/products/{slug}', 'HomeController@productDetail')->name('detail.book');

    // Route::get('/search',['uses' => 'SearchController@getSearch','as' => 'search']);
    Route::group(['prefix' => '/auth'], function () {
        Route::get('/login', 'HomeController@showLogin')->name('login');
        Route::get('/register', 'HomeController@showRegister')->name('register');
    });


    Route::group(['middleware' => ['auth']], function () {
    });
});

Route::get('/dashboard/login', 'LoginDashboardController@showLoginForm')->name('dashboard.login');

Route::group(['prefix' => '/dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.home');
    Route::get('/file-manager', 'DashboardController@fileManager')->name('dashboard.file-manager');
    Route::resources([
        'category' => 'CategoryController',
        'order' => 'OrderController',
        'product' => 'ProductController',
        'user' => 'UserController',
        'coupon' => 'CouponController',
        'author' => 'AuthorController',
        'language' => 'LanguageController',
        'publisher' => 'PublisherController'
    ]);
});

Auth::routes();

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

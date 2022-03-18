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

Route::group(['as' => 'api.'], function () {
    // Address
    Route::get('/address/provinces', 'AddressController@getProvinces')->name('get-list-provinces');
    Route::get('/address/districts/{id}', 'AddressController@getDistricts')->name('get-list-districts');
    Route::get('/address/wards/{id}', 'AddressController@getWards')->name('get-list-wards');

    Route::group(['middleware' => ['auth']], function () {
        // Cart
        Route::post('/apply-coupon', 'HomeController@applyCoupon')->name('apply-coupon');
        Route::get('/cart', 'CartController@getListCart')->name('cart');
        Route::get('/cart/{id}', 'CartController@addToCart')->name('add-cart');
        Route::put('/cart/{id}', 'CartController@updateCart')->name('update-cart');
        Route::delete('/cart/{id}', 'CartController@removeCart')->name('remove-cart');
    });
});

Route::group(['as' => 'shop.'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'HomeController@showAbout')->name('about');
    Route::group(['prefix' => '/auth'], function () {
        Route::get('/login', 'HomeController@showLogin')->name('login');
        Route::get('/register', 'HomeController@showRegister')->name('register');
    });


    Route::group(['middleware' => ['auth']], function () {
    });
});

Route::get('/dashboard/login', 'LoginDashboardController@showLoginForm')->name('dashboard.login');
Route::post('/dashboard/login', 'LoginDashboardController@login')->name('dashboard.handle.login');

Route::group(['prefix' => '/dashboard', 'middleware' => ['auth', 'dashboard.access']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::get('/profile', 'DashboardController@showProfile')->name('dashboard.profile');
    Route::post('/profile', 'DashboardController@updateProfile')->name('dashboard.profile.update');
    Route::get('/profile/password', 'DashboardController@showUpdatePassword')->name('dashboard.profile.show-update-password');
    Route::post('/profile/password', 'DashboardController@updatePassword')->name('dashboard.profile.update-password');
    Route::post('/profile/avatar', 'DashboardController@updateAvatar')->name('dashboard.profile.update-avatar');
    Route::get('/file-manager', 'DashboardController@fileManager')->name('dashboard.file-manager');
    Route::get('/income', 'OrderController@incomeChart')->name('product.order.income');

    // Notification
    Route::get('/notifications', 'NotificationController@index')->name('dashboard.notification.index');
    Route::get('/notification/{id}', 'NotificationController@show')->name('dashboard.notification.show');
    Route::delete('/notification/{id}', 'NotificationController@delete')->name('dashboard.notification.delete');
    Route::post('/notification/mark-as-read', 'NotificationController@markAsRead')->name('dashboard.notification.mark-as-read');
    Route::post('/notification/destroy', 'NotificationController@destroy')->name('dashboard.notification.destroy');

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

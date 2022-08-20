<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\Restaurant\RestaurantController;
use App\Http\Controllers\MenuController\MenuController;
use App\Http\Controllers\Restaurant\Booking\BookingController;
use App\Http\Controllers\Restaurant\Order\OrderController;
use App\Http\Controllers\Restaurant\Table\TableController;
use App\Http\Middleware\Authenticate\UserAuthenticate;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\FileHandler\FileHandlerController;
use App\Http\Controllers\CategoryController\CategoryController;

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

Route::group([
    'prefix' => 'api/v1/user',
],
    function () {
        Route::post('login', [
            LoginController::class,
            'login'
        ]);
        Route::post('create', [
            RegisterController::class,
            'create'
        ]);
        Route::post('forgot-password', [
            RegisterController::class,
            'forgotPassword'
        ]);
        Route::post('reset-password', [
            RegisterController::class,
            'resetPassword'
        ]);
    });
/// new file for authenticated user
Route::group([
    'prefix' => 'api/v1/user',
    'middleware' => [UserAuthenticate::class]
],
    function () {
        Route::post('get', [
            UserController::class,
            'getUserDetails'
        ]);
});

/// -- new file for file handling
Route::group([
    'prefix' => 'api/v1/file',
    'middleware' => [UserAuthenticate::class]
],
    function () {
        Route::post('upload', [
            FileHandlerController::class,
            'upload'
        ]);
});

/// -- new file for category handling
Route::group([
    'prefix' => 'api/v1/category',
    'middleware' => [UserAuthenticate::class]
],
    function () {
        Route::post('create', [
            CategoryController::class,
            'create'
        ]);
});
/// -- new file for menu handling
Route::group([
    'prefix' => 'api/v1/menu',
    'middleware' => [UserAuthenticate::class]
],
    function () {
        Route::post('create', [
            MenuController::class,
            'create'
        ]);
});

/// -- new file for  restaurant
Route::group([
    'prefix' => 'api/v1/restaurant',
    'middleware' => [UserAuthenticate::class]
],
    function () {
        Route::post('create', [
            RestaurantController::class,
            'create'
        ]);
        Route::post('update', [
            RestaurantController::class,
            'update'
        ]);
        Route::post('get', [
            RestaurantController::class,
            'get'
        ]);
        Route::post('getAll', [
            RestaurantController::class,
            'getAll'
        ]);
        Route::post('delete-by-id', [
            RestaurantController::class,
            'deleteById'
        ]);
});

Route::group([
    'prefix' => 'api/v1/',
    'middleware' => [UserAuthenticate::class]
],
    function () {
        Route::post('table/create', [
            TableController::class,
            'create'
        ]);
        Route::post('order/create', [
            OrderController::class,
            'create'
        ]);
        Route::post('booking/create', [
            BookingController::class,
            'create'
        ]);
        Route::post('booking/update', [
            RestaurantController::class,
            'update'
        ]);
        Route::post('table/update', [
            TableController::class,
            'update'
        ]);
        Route::post('order/update', [
            OrderController::class,
            'update'
        ]);
        Route::post('booking/update', [
            BookingController::class,
            'update'
        ]);
        Route::post('menu/update', [
            MenuController::class,
            'update'
        ]);
    });

<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebController;
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

Route::middleware('guest')->group(function () {
    Route::controller(WebController::class)->group(function () {
        // ? area admin
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register');
        // ? end area admin
    });
    Route::controller(LoginController::class)->group(function () {
        // todo registrasi simpan data
        Route::post('/simpan_data_user', 'register');
        // todo login validasi data
        Route::post('/login_sistem', 'login');
    });
});
Route::middleware('auth')->group(function () {
    Route::controller(WebController::class)->group(function () {
        // todo membuka area dashbord admin
        Route::get('/home_Admin', 'homeAdmin');
    });
    Route::controller(LoginController::class)->group(function () {
        // todo keluar dari dashbord admin
        Route::get('/logout_system', 'logout');
    });
});

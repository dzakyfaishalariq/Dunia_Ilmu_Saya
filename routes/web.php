<?php

use App\Http\Controllers\BuatSoalController;
use App\Http\Controllers\KategoriBidangController;
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
        // todo membuka area buat soal
        Route::get('/buat_soal', 'buat_soal');
        //todo membuka area buat kategori bidang soal
        Route::get('/buat_kategori_bidang', 'buat_kategori_bidang');
    });
    Route::controller(LoginController::class)->group(function () {
        // todo keluar dari dashbord admin
        Route::get('/logout_system', 'logout');
    });
    Route::controller(KategoriBidangController::class)->group(function () {
        // ! area kategori manajemen
        // todo area buat kategori
        Route::post('/buat_kategori_system', 'buat_kategori');
        // todo area edit kategori
        Route::put('/edit_data_kategori/{kategori}', 'edit_data');
        // todo area hapus kategori
        Route::get('/hapus_kategori/{hapus}', 'hapus_data');
        // ! area bidang manajemen
        // todo buat area bidang
        Route::post('/buat_bidang_system', 'buat_bidang');
        // todo area edit kateogori
        Route::put('/edit_data_bidang/{bidang}', 'edit_data_bidang');
        // todo area hapus bidang
        Route::get('/hapus_bidang/{bidang}', 'hapus_data_bidang');
    });
    Route::controller(BuatSoalController::class)->group(function () {
        //!buat soal system
        // todo buat soal
        Route::post('/tess', 'buat_soal_system');
        // Route::post('/tess', function () {
        //     dd("hallo");
        // });
    });
});

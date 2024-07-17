<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;



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
    return view('home');
});


Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [LoginController::class, 'authanticate']);
Route::get('/logoutphp', [LoginController::class, 'logout']);

Route::resource('admin', UserController::class);
Route::resource('menu', MenuController::class);
Route::resource('transaksi', TransaksiController::class);
Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('/cetak', [LaporanController::class, 'cetak'])->name('cetak');

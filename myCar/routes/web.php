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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Kendaraan', [App\Http\Controllers\KendaraanController::class, 'index'])->name('Kendaraan');

Route::post('/Kendaraan/tambahKendaraan', [App\Http\Controllers\KendaraanController::class, 'TambahKendaraan'])->name('tambahKendaraan');

Route::get('/editKendaraan/{id}', [App\Http\Controllers\KendaraanController::class, 'EditKendaraan'])->name('editKendaraan');

Route::post('/updateKendaraan', [App\Http\Controllers\KendaraanController::class, 'UpdateKendaraan'])->name('updateKendaraan');

Route::get('/hapusKendaraan/{id}', [App\Http\Controllers\KendaraanController::class, 'HapusKendaraan'])->name('hapusKendaraan');

Route::get('/Motor', [App\Http\Controllers\MotorController::class, 'index'])->name('Motor');
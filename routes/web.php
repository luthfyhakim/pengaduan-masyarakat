<?php

use App\Http\Controllers\Users\UserController;
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

// Masyarakat
Route::get('/', [UserController::class, 'index'])->name('pekat.index');

Route::post('/login/auth', [UserController::class, 'login'])->name('pekat.login');

Route::get('/register', [UserController::class, 'formRegister'])->name('pekat.formRegister');
Route::post('/register/auth', [UserController::class, 'register'])->name('pekat.register');

//untuk mengirim pengaduan
Route::post('/store', [UserController::class, 'storePengaduan'])->name('pekat.store');
Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('pekat.laporan');

Route::get('/logout', [UserController::class, 'logout'])->name('pekat.logout');

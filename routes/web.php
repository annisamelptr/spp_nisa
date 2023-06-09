<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logindata', [LoginController::class, 'logindata']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('auth');

Route::resource('siswa', Siswacontroller::class);

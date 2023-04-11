<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CekOngkirController;

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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/create_password', [LoginController::class, 'create_password'])->name('create_password');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/auth/redirect', [LoginController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('/auth/callback', [LoginController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('ongkir', [CekOngkirController::class, 'index'])->name('ongkir');
Route::get('cekongkir', [CekOngkirController::class, 'cekongkir'])->name('cekongkir');
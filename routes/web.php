<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CekOngkirController;
use App\Http\Controllers\SchoolController;

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
Route::post('tarifongkir', [CekOngkirController::class, 'tarifongkir'])->name('tarifongkir');

Route::get('school', [SchoolController::class, 'index'])->name('school');
Route::get('school/add', [SchoolController::class, 'add'])->name('school_add');
Route::get('school/pdf_single', [SchoolController::class, 'pdf_single'])->name('school_pdf_single');
Route::post('school/pdf_parsing', [SchoolController::class, 'pdf_parsing'])->name('school_pdf_parsing');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Action;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Home;
use App\Http\Controllers\Logout;

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

Route::post('/action/save_plat_nomor', [Action::class, 'save_plat_nomor']);

Route::post('/action/keluar', [Action::class, 'keluar']);

Route::get('/home/view_code', [Home::class, 'view_code']);

Route::get('/home/keluar', [Home::class, 'keluar']);

Route::get('/home/biaya', [Home::class, 'biaya']);

Route::get('/admin/login', [Admin::class, 'login'])->name('login')->middleware('guest');

Route::post('/admin/authenticate', [Admin::class, 'authenticate']);

Route::post('/logout', [Logout::class, 'index']);

Route::get('/admin/laporan', [Admin::class, 'laporan'])->middleware('auth');

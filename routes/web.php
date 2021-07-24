<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin area
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('admin.home')->
middleware('admin');
//gs
Route::get('/gs/home', [App\Http\Controllers\HomeController::class, 'gsindex'])->name('gs.home')->
middleware('gs');
//phi
Route::get('/phi/home', [App\Http\Controllers\HomeController::class, 'phiindex'])->name('phi.home')->
middleware('phi');
//user
Route::get('/user/home', [App\Http\Controllers\HomeController::class, 'userindex'])->name('user.home');

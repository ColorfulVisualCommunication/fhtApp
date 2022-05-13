<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\DashboardController;
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
Route::get('/auth.register',[RegisterController::class, 'reg'])->name('register');
Route::post('/auth.register',[RegisterController::class, 'store']);

Route::get('/auth.login',[LoginController::class, 'login'])->name('login');
//Route::post('/auth.login',[LoginController::class, 'store']);

Route::get('/auth.logout',[LogoutController::class, 'logout'])->name('logout');
Route::get('/auth.dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/', function () {
    return view('templates.index');
});

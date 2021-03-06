<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailContactController;
use Illuminate\Support\Facades\Artisan;
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

Route::view('/', 'index');
Route::view('/blog', 'single-blog')->name('single-blog');
Route::view('/color-game', 'pages.colorgame')->name('colorgame');
Route::post('/contact-form', EmailContactController::class);


Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    return redirect('/');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

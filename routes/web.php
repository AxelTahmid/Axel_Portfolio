<?php

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
Route::view('/color-game', 'pages.colorgame');

Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    dd('optimize:clear done');
});

Route::view('/login', 'auth.login');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/test', function () {
        return 'test test';
    });
});

Route::post('/contact-form', EmailContactController::class);

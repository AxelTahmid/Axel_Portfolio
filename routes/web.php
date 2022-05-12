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
    return view('index');
});

Route::get('/color-game', function () {
    return view('pages.colorgame');
});

Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'store'])->name('contact-form.store');

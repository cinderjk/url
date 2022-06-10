<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UrlController;

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

Route::get('/', [UrlController::class, 'index']);

Route::resource('/urls', UrlController::class);

Route::inertia('about', 'About')->name('about-me');

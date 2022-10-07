<?php

use App\Http\Controllers\Cookie\CookieController;
use App\Http\Controllers\Instagram\FeedController;
use App\Http\Controllers\Instagram\FetchController;
use App\Http\Controllers\PageController\PageController;
use App\Http\Controllers\Twitter\LocationController;
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


Route::get('/', function () {
    return view('contact.contact');
});
*/

Route::get('/contact', [PageController::class, 'index'])->name('contact.index');
Route::get('/goster', [PageController::class, 'viewCookie'])->name('contact.view');
Route::post('/contact', [CookieController::class, 'setCookie'])->name('setCookie');
Route::get('/get', [CookieController::class, 'getCookie']);
Route::get('/cookie', [CookieController::class, 'getCookie']);
Route::get('/instagram-proxy', [FeedController::class, 'proxy']);
Route::get('/instagram-feed', [FeedController::class, 'getFeed']);

<?php

use App\Http\Controllers\Cookie\CookieController;
use App\Http\Controllers\Instagram\FeedController;
use App\Http\Controllers\Instagram\SearchUserController;
use App\Http\Controllers\PageController\PageController;
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

/*
|--------------------------------------------------------------------------
| Sayfalar Routes Controller
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'index']);
Route::get('/bize-ulasın', [PageController::class, 'index'])->name('contact.index');
Route::get('/goster', [PageController::class, 'viewCookie'])->name('contact.view');
Route::get('/kullanci', [PageController::class, 'profil'])->name('instagram.user');
Route::get('/proxy-ile', [PageController::class, 'proxyIle'])->name('instagram.proxy');
Route::get('/kullancilar', [PageController::class, 'profiller'])->name('instagram.list-users');

/*
|--------------------------------------------------------------------------
| Cookie Routes Controller
|--------------------------------------------------------------------------
*/

Route::controller(CookieController::class)->group(function () {
    Route::post('/contact', 'setCookie')->name('setCookie');
    Route::get('/cookie', 'getCookie');
});

/*
|--------------------------------------------------------------------------
| Feed(Profile Akişi) Routes Controller
|--------------------------------------------------------------------------
*/

Route::controller(FeedController::class)->group(function () {
    Route::post('/profil-aksini', 'profilAksini')->name('profilAksini');
    Route::post('/proxy-aksini', 'proxy')->name('proxy');
    Route::post('/login-islem', 'loginIslem')->name('loginIslem');
});

/*
|--------------------------------------------------------------------------
| Search(Profiller Akişi) Routes Controller
|--------------------------------------------------------------------------
*/
Route::post('/users', [SearchUserController::class, 'userSearch'])->name('userSearch');

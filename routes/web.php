<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [LandingController::class, 'index']);
Route::get('/product/{id}', [LandingController::class, 'getOne'])->name('product.page');

Route::post('/product/{id}/order-cek', [OrderController::class, 'cek'])->name('order.cek');

Route::get('/disclaimer', function () {
    return view('pages.disclaimer');
});

Route::get('/privacy-policy', function () {
    return view('pages.privacypolicy');
});

Route::get('/terms-and-condition', function () {
    return view('pages.terms');
});



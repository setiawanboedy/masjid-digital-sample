<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Backend
Route::prefix('admin')
    ->namespace('App\Http\Controllers')
    ->middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        'admin'
    ])->group(function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    });


    // Frontend
Route::get('/', function () {
    return view('frontend.home');
})->name('home.index');

Route::get('/event', function () {
    return view('frontend.event');
})->name('event.index');

Route::get('/event/pembayaran', function () {
    return view('frontend.payment');
})->name('event.payment.index');

Route::get('/event/detail', function () {
return view('frontend.detail');
})->name('event.detail.index');

Route::get('/masuk', function () {
return view('frontend.auth.login');
})->name('login.index');

Route::get('/daftar', function () {
return view('frontend.auth.register');
})->name('register.index');

Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/transaksi', function () {
            return view('frontend.transaction');
        })->name('transaction.index');
        
        Route::get('/profil', function () {
            return view('frontend.profile');
        })->name('profile.index');

    });


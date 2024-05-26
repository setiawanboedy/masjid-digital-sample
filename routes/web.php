<?php

use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Frontend\FrontEndController;
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
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/event', function () {
            return view('admin.event');
        })->name('admin.event.index');

        Route::get('/event/buat', [BackendController::class, 'createEvent'])->name('admin.event.create');
    });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin'
])->group(function () {
    Route::post('/upload/editor', [BackendController::class, 'uploadImageTextEditor'])->name('editor.image.upload');
});


// Frontend
Route::get('/', [FrontEndController::class, 'home'])->name('home.index');

Route::get('/event/web-series', [FrontEndController::class, 'webSeries'])->name('web-series.index');
Route::get('/event/event-online', [FrontEndController::class, 'eventOnline'])->name('event-online.index');
Route::get('/event/event-offline', [FrontEndController::class, 'eventOffline'])->name('event-offline.index');

Route::get('/event', function () {
    return view('frontend.event');
})->name('event.index');

Route::get('/event/pembayaran/{slug}', [FrontEndController::class, 'payment'])->name('event.payment.index');

Route::get('/event/detail/{slug}', [FrontEndController::class, 'detailEvent'])->name('event.detail.index');

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
    'user'
])->group(function () {
    Route::get('/transaksi', function () {
        return view('frontend.transaction');
    })->name('transaction.index');
    
    Route::get('/profil', function () {
        return view('frontend.profile');
    })->name('profile.index');
    
    Route::get('/profil/edit', function () {
        return view('frontend.edit-profile');
    })->name('profile.edit.index');
    
    Route::post('/event/payment/pay/{slug}', [FrontEndController::class, 'pay'])->name('event.payment.pay');
    Route::get('/transaksi/detail/{id}', [FrontEndController::class, 'transactionDetail'])->name('transaction.detail.index');
});

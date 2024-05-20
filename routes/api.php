<?php

use App\Http\Controllers\Admin\BackendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::middleware([
//         'auth:sanctum',
//         config('jetstream.auth_session'),
//         'verified',
//         'admin'
//     ])->group(function () {
//         Route::post('/upload/editor', [BackendController::class, 'uploadImageTextEditor'])->name('editor.image.upload');
//     });

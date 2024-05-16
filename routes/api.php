<?php

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

// Route::get('/dashboard/trans/statistics', [DashboardController::class,'getTransactionGraphByMonthPerYear'])
// ->name('dashboard.trans.statistics');

// Route::get('/dashboard/sum/statistics', [DashboardController::class,'getAmountGraphByMonthPerYear'])
// ->name('dashboard.sum.statistics');
// Route::get('/dashboard/percentage/targets', [DashboardController::class,'getYearTargetGraphByMonthPerYear'])
// ->name('dashboard.percentage.targets');



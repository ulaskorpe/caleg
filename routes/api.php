<?php

use App\Http\Controllers\FinanceController;
use App\Http\Controllers\PaytrController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/product-price', [FinanceController::class, 'calculateProductPrice'])->name('product.price');
Route::post('/payment-notification', [PaytrController::class, 'paymentNotification'])->name('payment.notification');
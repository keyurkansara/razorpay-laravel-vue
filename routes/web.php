<?php

use App\Http\Controllers\RazorPayController;
use Illuminate\Support\Facades\Route;

Route::view('/pay/razorpay', 'razorpay');
Route::post('/pay/verify', [RazorPayController::class, 'verify']);

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

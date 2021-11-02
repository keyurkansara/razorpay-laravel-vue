<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorPayController;

Route::post('payment/razorpay', [RazorPayController::class, 'razorpay'])->name('paymentRazorpay');

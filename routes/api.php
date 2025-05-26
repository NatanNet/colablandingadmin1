<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PendaftarController;
use App\Http\Controllers\OtpController;

Route::middleware('api')->group(function () {
    Route::post('/pendaftar', [PendaftarController::class, 'store']);
});

Route::post('send-otp', [OtpController::class, 'sendOtp']);

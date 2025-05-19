<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PendaftarController;

Route::middleware('api')->group(function () {
    Route::post('/pendaftar', [PendaftarController::class, 'store']);
});

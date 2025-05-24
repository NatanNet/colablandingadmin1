<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\EventController; // ← FIX: Namespace yang benar
use Illuminate\Support\Facades\Route;

// Landing Page Route
Route::get('/', [LandingPageController::class, 'landing']);

// Event Details Route
//Route::get('/event-details/{slug}', [EventController::class, 'showDetails'])->name('event.details');

// Alamat Routes
Route::get('/', [AlamatController::class, 'index']);
Route::get('/alamat', [AlamatController::class, 'index']);

// API Routes
Route::middleware('api')->group(function () {
    Route::get('/tes', function () {
        return response()->json(['message' => 'API route works in web.php']);
    });

    Route::post('/pendaftar', [App\Http\Controllers\Api\PendaftarController::class, 'store']);
    Route::get('/events', [App\Http\Controllers\Api\EventController::class, 'index']);
});
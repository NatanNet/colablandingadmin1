<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[LandingPageController::class,'landing']);

Route::middleware('api')->group(function () {
    Route::get('/tes', function () {
        return response()->json(['message' => 'API route works in web.php']);
    });

    Route::post('/pendaftar', [App\Http\Controllers\Api\PendaftarController::class, 'store']);
    Route::get('/events', [App\Http\Controllers\Api\EventController::class, 'index']);
});


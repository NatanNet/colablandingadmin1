<?php

use Illuminate\Support\Facades\Route;

Route::get('/landing', function () {
    return view('landing');
});
Route::middleware('api')->group(function () {
    Route::get('/tes', function () {
        return response()->json(['message' => 'API route works in web.php']);
    });

    Route::post('/pendaftar', [App\Http\Controllers\Api\PendaftarController::class, 'store']);
    Route::get('/events', [App\Http\Controllers\Api\EventController::class, 'index']);
});

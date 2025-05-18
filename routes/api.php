<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PendaftarController;
use App\Http\Controllers\Api\EventController;

Route::get('events', [EventController::class, 'index']);
Route::post('pendaftar', [PendaftarController::class, 'store']);

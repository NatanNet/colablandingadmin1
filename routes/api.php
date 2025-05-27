<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\OtpController;

// Route::middleware('api')->group(function () {
//     Route::post('/pendaftar', [PendaftarController::class, 'store']);
// });

//send otp
Route::post('send-otp', [OtpController::class, 'sendOtp']);

//untuk pendaftar
Route::get('pendaftar', [PendaftarController::class, 'index']); // Untuk melihat semua pendaftar
Route::get('pendaftar/{id}', [PendaftarController::class, 'show']); // Untuk melihat pendaftar berdasarkan ID
Route::post('pendaftar', [PendaftarController::class, 'store']); // Untuk mendaftar
Route::put('pendaftar/{id}', [PendaftarController::class, 'update']); // Untuk mengupdate pendaftar
Route::delete('pendaftar/{id}', [PendaftarController::class, 'destroy']); // Untuk menghapus pendaftar
Route::put('pendaftar/status/{id}', [PendaftarController::class, 'updateStatus']); // Untuk admin mengubah status pendaftar

//untuk events

Route::get('events', [EventController::class, 'index']);  // Menampilkan seluruh events
Route::get('events/{id}', [EventController::class, 'show']);  // Menampilkan event berdasarkan ID
Route::post('events', [EventController::class, 'store']);  // Menambahkan event baru
Route::put('events/{id}', [EventController::class, 'update']);  // Mengupdate event berdasarkan ID
Route::delete('events/{id}', [EventController::class, 'destroy']);  // Menghapus event berdasarkan ID

//untuk kegiatans

Route::get('kegiatans', [KegiatanController::class, 'index']);  // Menampilkan seluruh kegiatan
Route::get('kegiatans/{id}', [KegiatanController::class, 'show']);  // Menampilkan kegiatan berdasarkan ID
Route::post('kegiatans', [KegiatanController::class, 'store']);  // Menambahkan kegiatan baru
Route::put('kegiatans/{id}', [KegiatanController::class, 'update']);  // Mengupdate kegiatan berdasarkan ID
Route::delete('kegiatans/{id}', [KegiatanController::class, 'destroy']);  // Menghapus kegiatan berdasarkan ID


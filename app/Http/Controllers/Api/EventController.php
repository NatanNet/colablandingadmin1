<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class EventController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $events = Event::select(
                'id_event',
                'nama_event',
                'deskripsi',
                'lokasi',
                'tanggal_mulai',
                'tanggal_selesai',
                'banner_image',
                'created_at',
                'updated_at'
            )->orderBy('tanggal_mulai', 'asc')->get();

            return response()->json($events);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => 'Gagal mengambil data events.',
            ], 500);
        }
    }
}

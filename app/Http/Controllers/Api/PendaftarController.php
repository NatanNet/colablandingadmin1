<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PendaftarController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input dari mobile
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:50',
            'alamat' => 'required|string',
            'kategori_olahraga' => 'required|string',
//            'status' => 'nullable|string|in:pending,approved,rejected',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Buat data pendaftar baru
        $pendaftar = Pendaftar::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'alamat' => $request->input('alamat'),
            'kategori_olahraga' => $request->input('kategori_olahraga'),
            'status' => $request->input('status', 'pending'), // default pending
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pendaftar berhasil ditambahkan',
            'data' => $pendaftar,
        ], 201);
    }
}

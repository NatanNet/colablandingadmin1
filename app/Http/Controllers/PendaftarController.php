<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    // Menampilkan seluruh data pendaftar
    public function index()
    {
        return response()->json(Pendaftar::all());
    }

    // Menampilkan data pendaftar berdasarkan ID
    public function show($id)
    {
        $pendaftar = Pendaftar::find($id);

        if (!$pendaftar) {
            return response()->json(['message' => 'Pendaftar not found'], 404);
        }

        return response()->json($pendaftar);
    }

    // Menambahkan data pendaftar baru
    public function store(Request $request)
    {
        // Pastikan validasi sesuai dengan kolom yang benar
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'nomer_hp' => 'required|max:14',
            'alamat' => 'required|max:255',
            'kategori_olahraga' => 'required|in:football,basketball,volleyball,badminton',
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $pendaftar = Pendaftar::create($validated);

        return response()->json($pendaftar, 201);
    }

    // Mengupdate data pendaftar
    public function update(Request $request, $id)
    {
        $pendaftar = Pendaftar::find($id);

        if (!$pendaftar) {
            return response()->json(['message' => 'Pendaftar not found'], 404);
        }

        $validated = $request->validate([
            'nama' => 'required|max:255',
            'nomer_hp' => 'required|max:14',
            'alamat' => 'required|max:255',
            'kategori_olahraga' => 'required|in:football,basketball,volleyball, badminton',
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $pendaftar->update($validated);

        return response()->json($pendaftar);
    }

    // Menghapus data pendaftar
    public function destroy($id)
    {
        $pendaftar = Pendaftar::find($id);

        if (!$pendaftar) {
            return response()->json(['message' => 'Pendaftar not found'], 404);
        }

        $pendaftar->delete();

        return response()->json(['message' => 'Pendaftar deleted successfully']);
    }

    // Mengubah status pendaftar oleh admin
    public function updateStatus(Request $request, $id)
    {
        $pendaftar = Pendaftar::find($id);

        if (!$pendaftar) {
            return response()->json(['message' => 'Pendaftar not found'], 404);
        }

        // Validasi status yang bisa diterima adalah 'approved' atau 'rejected'
        $validated = $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        // Update status pendaftar
        $pendaftar->status = $validated['status'];
        $pendaftar->save();

        return response()->json($pendaftar);
    }
}

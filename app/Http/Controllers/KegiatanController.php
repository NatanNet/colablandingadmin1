<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    // Menampilkan seluruh data kegiatan
    public function index()
    {
        return response()->json(Kegiatan::all());
    }

    // Menampilkan data kegiatan berdasarkan ID
    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);

        if (!$kegiatan) {
            return response()->json(['message' => 'Kegiatan not found'], 404);
        }

        return response()->json($kegiatan);
    }

    // Menambahkan data kegiatan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'deskripsi' => 'required',
            'lokasi' => 'required|max:255',
            'waktu' => 'required|date',
            'hari' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar dan simpan pathnya
        $path = $request->file('banner_image')->store('kegiatan_banners', 'public');

        // Menyimpan kegiatan ke dalam database
        $kegiatan = Kegiatan::create([
            'nama_kegiatan' => $validated['nama_kegiatan'],
            'deskripsi' => $validated['deskripsi'],
            'lokasi' => $validated['lokasi'],
            'waktu' => $validated['waktu'],
            'hari' => $validated['hari'],
            'banner_image' => $path, // Menyimpan path gambar
        ]);

        return response()->json($kegiatan, 201);
    }

    // Mengupdate data kegiatan berdasarkan ID
    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::find($id);

        if (!$kegiatan) {
            return response()->json(['message' => 'Kegiatan not found'], 404);
        }

        $validated = $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'deskripsi' => 'required',
            'lokasi' => 'required|max:255',
            'waktu' => 'required|date',
            'hari' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika ada gambar baru, upload dan simpan pathnya
        if ($request->hasFile('banner_image')) {
            // Hapus gambar lama jika ada
            if ($kegiatan->banner_image) {
                Storage::disk('public')->delete($kegiatan->banner_image);
            }

            $path = $request->file('banner_image')->store('kegiatan_banners', 'public');
            $kegiatan->banner_image = $path;
        }

        // Update data kegiatan
        $kegiatan->update($validated);

        return response()->json($kegiatan);
    }

    // Menghapus data kegiatan berdasarkan ID
    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);

        if (!$kegiatan) {
            return response()->json(['message' => 'Kegiatan not found'], 404);
        }

        // Hapus gambar jika ada
        if ($kegiatan->banner_image) {
            Storage::disk('public')->delete($kegiatan->banner_image);
        }

        $kegiatan->delete();

        return response()->json(['message' => 'Kegiatan deleted successfully']);
    }
}


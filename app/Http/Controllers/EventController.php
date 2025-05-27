<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // Menampilkan seluruh data events
    public function index()
    {
        return response()->json(Event::all());
    }

    // Menampilkan event berdasarkan ID
    public function show($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        return response()->json($event);
    }

    // Menambahkan event baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_event' => 'required|max:255',
            'deskripsi' => 'required',
            'lokasi' => 'required|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar dan simpan pathnya
        $path = $request->file('banner_image')->store('event_banners', 'public');

        // Menyimpan event ke dalam database
        $event = Event::create([
            'nama_event' => $validated['nama_event'],
            'deskripsi' => $validated['deskripsi'],
            'lokasi' => $validated['lokasi'],
            'tanggal_mulai' => $validated['tanggal_mulai'],
            'tanggal_selesai' => $validated['tanggal_selesai'],
            'banner_image' => $path, // Menyimpan path gambar
        ]);

        return response()->json($event, 201);
    }

    // Mengupdate data event berdasarkan ID
    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $validated = $request->validate([
            'nama_event' => 'required|max:255',
            'deskripsi' => 'required',
            'lokasi' => 'required|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika ada gambar baru, upload dan simpan pathnya
        if ($request->hasFile('banner_image')) {
            // Hapus gambar lama jika ada
            if ($event->banner_image) {
                Storage::disk('public')->delete($event->banner_image);
            }

            $path = $request->file('banner_image')->store('event_banners', 'public');
            $event->banner_image = $path;
        }

        // Update data event
        $event->update($validated);

        return response()->json($event);
    }

    // Menghapus event berdasarkan ID
    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        // Hapus gambar jika ada
        if ($event->banner_image) {
            Storage::disk('public')->delete($event->banner_image);
        }

        $event->delete();

        return response()->json(['message' => 'Event deleted successfully']);
    }
}

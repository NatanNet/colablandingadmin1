<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Event::create([
        'nama_event' => 'Festival Olahraga 2025',
        'deskripsi' => 'Festival Olahraga 2025 adalah acara terbesar se Kabupaten Nganjuk',
        'lokasi' => 'G Juang 45 Nganjuk',
        'tanggal_mulai' => '2025-06-01',
        'tanggal_selesai' => '2025-06-03',
        'banner_image' => 'path/to/your-image.jpg',  // Jika ada gambar
    ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;  // Biasakan trait ditaruh di awal setelah deklarasi class

    // Menentukan nama primary key yang digunakan
    protected $primaryKey = 'id_event';  // Jika primary key Anda adalah 'id_event'

    // Menambahkan kolom yang bisa diisi massal
    protected $fillable = [
        'nama_event',
        'deskripsi',
        'lokasi',
        'waktu',
        'hari',
        'tanggal_mulai',
        'tanggal_selesai',
        'banner_image',
    ];

    // Hook ketika event dihapus untuk menghapus file banner image terkait
    protected static function booted()
    {
        static::deleted(function ($event) {
            if ($event->banner_image) {
                Storage::disk('public')->delete($event->banner_image);
            }
        });
    }
}

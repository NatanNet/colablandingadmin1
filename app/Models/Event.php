<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_event';

    protected $fillable = [
        'nama_event',
        'deskripsi',
        'lokasi',
        'tanggal_mulai',
        'tanggal_selesai',
        'banner_image',
        
        // 'waktu',
        // 'hari',
    ];

    // Hapus file banner saat event dihapus
    protected static function booted()
    {
        static::deleted(function ($event) {
            if ($event->banner_image && Storage::disk('public')->exists($event->banner_image)) {
                Storage::disk('public')->delete($event->banner_image);
            }
        });
    }

    // Tambahkan accessor agar banner_image jadi full URL
    public function getBannerImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftar extends Model
{
    use HasFactory;

    // Nama tabel (kalau nama tabel bukan plural dari model)
    protected $table = 'pendaftars';

    // Jika kamu ingin otomatis timestamps (created_at dan updated_at)
    public $timestamps = true;

    // Kolom yang bisa diisi secara massal
    protected $attributes = [
        'status' => 'pending', // default value
    ];

    protected $fillable = [
        'nama',
        'nomer_hp',
        'alamat',
        'kategori_olahraga',
        'status',
    ];
}

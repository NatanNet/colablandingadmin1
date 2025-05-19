<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Kegiatan;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\DB; // import DB facade
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landing()
    {
        $events = Event::latest()->take(3)->get();
        $kegiatans = Kegiatan::latest()->take(3)->get();

        $popularCategories = Pendaftar::select('kategori_olahraga', DB::raw('count(*) as total'))
            ->groupBy('kategori_olahraga')
            ->orderByDesc('total')
            ->limit(3)
            ->pluck('total', 'kategori_olahraga');

        return view('landing', compact('events', 'kegiatans', 'popularCategories'));
    }
}

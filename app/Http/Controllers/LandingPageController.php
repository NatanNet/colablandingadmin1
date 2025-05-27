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
        //mengambil event dan kegiatan tro
        $events = Event::latest()->take(4)->get(); 
        $kegiatans = Kegiatan::latest()->take(4)->get();


        //ambil kategori olahraga sng akeh didaftarkan 
        $popularCategories = Pendaftar::select('kategori_olahraga', DB::raw('count(*) as total'))
            ->groupBy('kategori_olahraga')
            ->orderByDesc('total')
            ->limit(3)
            ->pluck('total', 'kategori_olahraga');


            //mengirim data ke view landing tro
        return view('landing', compact('events', 'kegiatans' )); //'popularCategories' tak komen wait
    }
}

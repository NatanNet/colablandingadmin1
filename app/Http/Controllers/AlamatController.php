<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function index()
    {
        $alamat = [
            'name' => 'KONI NGANJUK',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.736817099245!2d111.8963367!3d-7.603593699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b05bd50c375%3A0xf73a522d786df02e!2sGedung%20Juang%2045%20Nganjuk!5e0!3m2!1sid!2sid!4v1748012292159!5m2!1sid!2sid'
        ];
        return view('landing', compact('alamat'));
    }
}

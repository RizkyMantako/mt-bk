<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function proses()
    {
        return view ('pages.proses.proses_donasi');
    }

    public function tolak()
    {
        return view('pages.riwayat.riwayat_donasi');
    }
}

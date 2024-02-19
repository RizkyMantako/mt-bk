<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RiwayatDonasi;
use App\Models\RiwayatSampah;

class RiwayatController extends Controller
{
    public function getListDonasi(){
        $data = RiwayatDonasi::all()->whereIn('status', ['Selesai', 'selesai', 'Ditolak', 'ditolak']);
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function getDetailDonasi($id){
        $data = RiwayatDonasi::find($id);
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function getListSampah(){
        $data = RiwayatSampah::all()->whereIn('status', ['Selesai', 'selesai', 'Ditolak', 'ditolak']);
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function getDetailSampah($id){
        $data = RiwayatSampah::find($id);
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
}

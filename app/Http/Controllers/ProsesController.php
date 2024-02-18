<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProsesDonasi;
use App\Models\ProsesSampah;

class ProsesController extends Controller
{
    public function getListDonasi(){
        $data = ProsesDonasi::all();
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function getDetailDonasi($id){
        $data = ProsesDonasi::find($id);
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function getListSampah(){
        $data = ProsesSampah::all();
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function getDetailSampah($id){
        $data = ProsesSampah::find($id);
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
}

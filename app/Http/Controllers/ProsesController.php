<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProsesDonasi;
use App\Models\ProsesSampah;

class ProsesController extends Controller
{
    public function getListDonasi(){
        $data = ProsesDonasi::all()->where('status', 'InProses');
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
        $data = ProsesSampah::all()->where('status', 'InProses');
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

    public function addSampah(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'foto_sampah' => 'required|image',
            'deskripsi' => 'required',
            'berat_sampah' => 'required',
            'status' => 'nullable',
        ]);
    
        $foto_sampah_path = null;
        if ($request->file('foto_sampah')->isValid()) {
            $foto_sampah = $request->file('foto_sampah');
            $foto_sampah_path = $foto_sampah->store('sampah_photos');
        }
    
        ProsesSampah::create([
            'user_id' => $data['user_id'],
            'nama' => $data['nama'],
            'no_hp' => $data['no_hp'],
            'alamat' => $data['alamat'],
            'foto_sampah' => $foto_sampah_path,
            'deskripsi' => $data['deskripsi'],
            'berat_sampah' => $data['berat_sampah'],
            'status' => $data['status'],
        ]);
    
        return response()->json(['message' => 'Sampah created successfully.', 'data' => $data], 201);
    }

    public function addDonasi(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'foto_makanan' => 'required',
            'deskripsi' => 'required',
            'berat_makanan' => 'required',
            'jenis_makanan' => 'required',  
            'status' => 'nullable',
        ]);

        $foto_makanan_path = null;
        if ($request->hasFile('foto_makanan')) {
            $foto_makanan = $request->file('foto_makanan');
            $foto_makanan_path = $foto_makanan->store('makanan_photos', 'public');
        }

        ProsesDonasi::create([
            'user_id' => $data['user_id'],
            'nama' => $data['nama'],
            'no_hp' => $data['no_hp'],
            'alamat' => $data['alamat'],
            'foto_makanan' => $foto_makanan_path,
            'deskripsi' => $data['deskripsi'],
            'berat_makanan' => $data['berat_makanan'],
            'jenis_makanan' => $data['jenis_makanan'],
            'status' => $data['status'],
        ]);
        return response()->json(['message' => 'Proses Donasi created successfully.\n', $data], 201);
    }
}

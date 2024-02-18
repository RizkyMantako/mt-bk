<?php

namespace App\Http\Controllers;

use App\Models\ProsesSampah;
use App\Models\RiwayatSampah;
use App\Models\Sampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampahController extends Controller
{
    public function index(Request $request)
    {
        $sampahs = DB::table('sampahs')
            ->when($request->input('user_id'), function ($query, $user_id) {
                return $query->where('user_id', 'like', '%' . $user_id . '%');
            })->where('status', 'Dalam Antrian')
            ->orderBy('id', 'asc')
            ->paginate(10);
        return view('pages.sampah.sampah', compact('sampahs'));
    }


    public function proses(Request $req)
    {
        $proses_sampah = DB::table('proses_sampahs')
            ->when($req->input('user_id'), function ($query, $user_id) {
                return $query->where('user_id', 'like', '%' . $user_id . '%');
            })->where('status', 'In Proses')
            ->orderBy('id', 'asc')->paginate(10);
        return view('pages.proses.proses_sampah', compact('proses_sampah'));
    }

    public function verifikasi(Request $req, $id)
    {
        $sampah = Sampah::findOrFail($id);
        $sampah->update([
            "status" => $req->status
        ]);
        if ($req->status == 'Terverifikasi') {
            ProsesSampah::create([
                "user_id" => $sampah->user_id,
                "nama" => $sampah->nama,
                "no_hp" => $sampah->no_hp,
                "alamat" => $sampah->alamat,
                "foto_sampah" => $sampah->foto_sampah,
                "berat_sampah" => $sampah->berat_sampah,
                "deskripsi" => $req->deskripsi
            ]);
            return redirect('/proses_sampah');
        } else if ($req->status == 'Ditolak') {
            RiwayatSampah::create([
                "user_id" => $sampah->user_id,
                "nama" => $sampah->nama,
                "no_hp" => $sampah->no_hp,
                "alamat" => $sampah->alamat,
                "foto_sampah" => $sampah->foto_sampah,
                "berat_sampah" => $sampah->berat_sampah,
                "jenis_sampah" => 1,
                "status" => $sampah->status,
                "deskripsi" => $req->deskripsi
            ]);
            return redirect('/riwayat_sampah');
        }
    }

    public function tolak(Request $req)
    {
        $riwayat_sampah = DB::table('riwayat_sampahs')
            ->when($req->input('user_id'), function ($query, $user_id) {
                return $query->where('user_id', 'like', '%' . $user_id . '%');
            })
            ->orderBy('id', 'asc')->paginate(10);
        return view('pages.riwayat.riwayat_sampah', compact('riwayat_sampah'));
    }

    public function selesaiProses(Request $req, $id)
    {
        $proses = ProsesSampah::findOrFail($id);
        
        $proses->update([
            "status" => "Selesai"
        ]);

        $sampah = Sampah::where('nama', $proses->nama)->first();
        
        RiwayatSampah::create([
            "user_id" => $sampah->user_id,
            "nama" => $sampah->nama,
            "no_hp" => $sampah->no_hp,
            "alamat" => $sampah->alamat,
            "foto_sampah" => $sampah->foto_sampah,
            "berat_sampah" => $sampah->berat_sampah,
            "jenis_sampah" => 1,
            "status" => "Selesai",
            "deskripsi" => $req->deskripsi
        ]);
        return redirect('/riwayat_sampah');
    }

    public function add(Request $request)
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
    
        Sampah::create([
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

    public function getList() {
        $sampah = Sampah::all();
        return response()->json([
            'success' => true,
            'data' => $sampah
        ]);
    }

    public function detail($id)
    {
        $sampah = Sampah::find($id);

        if (!$sampah) {
            return response()->json([
                'success' => false,
                'message' => 'Id tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $sampah,
        ]);
    }
}

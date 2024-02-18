<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\ProsesDonasi;
use App\Models\RiwayatDonasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonasiController extends Controller
{

    public function index(Request $req)
    {
        $donasis = DB::table('donasis')
            ->when($req->input('user_id'), function ($query, $user_id) {
                return $query->where('user_id', 'like', '%' . $user_id . '%');
            })->where('status', 'Dalam Antrian')
            ->orderBy('id', 'asc')->paginate(10);
        return view('pages.donasis.donasi', compact('donasis'));
    }

    public function proses(Request $request)
    {
        $proses_donasi = DB::table('proses_donasis')
            ->when($request->input('user_id'), function ($query, $user_id) {
                return $query->where('user_id', 'like', '%' . $user_id . '%');
            })
            ->orderBy('id', 'asc')->paginate(10);
        return view('pages.proses.proses_donasi', compact('proses_donasi'));
    }

    public function verifikasi(Request $req, $id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->update([
            "status" => $req->status
        ]);
        if ($req->status == 'Terverifikasi') {
            ProsesDonasi::create([
                "user_id" => $donasi->user_id,
                "nama" => $donasi->nama,
                "no_hp" => $donasi->no_hp,
                "alamat" => $donasi->alamat,
                "berat_makanan" => $donasi->berat_makanan,
                "foto_makanan" => $donasi->foto_makanan,
                "jenis_donasi" => $donasi->jenis_donasi,
                "deskripsi" => $req->deskripsi
            ]);
            return redirect('/proses_donasi');
        } else if ($req->status == 'Ditolak') {
            RiwayatDonasi::create([
                "user_id" => $donasi->user_id,
                "nama" => $donasi->nama,
                "no_hp" => $donasi->no_hp,
                "foto_makanan" => $donasi->foto_makanan,
                "berat_makanan" => $donasi->berat_makanan,
                "jenis_makanan" => $donasi->jenis_makanan ?? 0,
                "jenis_donasi" => $donasi->jenis_donasi,
                "status" => $donasi->status,
                "deskripsi" => $req->deskripsi
            ]);
        }
        return redirect('/riwayat_donasi');
    }

    public function tolak(Request $request)
    {

        $riwayat_donasi = DB::table('riwayat_donasis')
            ->when($request->input('user_id'), function ($query, $user_id) {
                return $query->where('user_id', 'like', '%' . $user_id . '%');
            })
            ->orderBy('id', 'asc')->paginate(10);
        return view('pages.riwayat.riwayat_donasi', compact('riwayat_donasi'));
    }
}

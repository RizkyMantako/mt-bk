<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonasiController extends Controller
{

    public function index(Request $req)
    {
        $donasis = DB::table('donasis')
        ->when($req->input('user_id'), function ($query, $user_id){
            return $query->where('user_id', 'like', '%' .$user_id. '%');
        })
        ->orderBy('id','asc')->paginate(10);
        return view('pages.donasis.donasi', compact('donasis'));
        }

        public function proses(Request $request)
        {
            if ($request->has('donasi_id')) {
                // Lakukan proses verifikasi donasi di sini
                // Contoh: Mengubah status donasi menjadi "Terverifikasi"
                $donasiId = $request->input('donasi_id');
                $donasi = Donasi::find($donasiId);
                $donasi->status = 'Terverifikasi';
                $donasi->save();

                // Redirect kembali ke halaman sebelumnya
                return redirect()->back()->with('success', 'Donasi berhasil diverifikasi');
            } else {
                $proses_donasi = DB::table('proses_donasis')
                    ->when($request->input('user_id'), function ($query, $user_id){
                        return $query->where('user_id', 'like', '%' .$user_id. '%');
                    })
                    ->orderBy('id','asc')->paginate(10);
                return view('pages.proses.proses_donasi', compact('proses_donasi'));
            }
        }


public function tolak(Request $request)
{
    if ($request->has('donasi_id')) {
        // Lakukan proses penolakan donasi di sini
        // Contoh: Mengubah status donasi menjadi "Ditolak"
        $donasiId = $request->input('donasi_id');
        $donasi = Donasi::find($donasiId);
        $donasi->status = 'Ditolak';
        $donasi->save();

        // Redirect kembali ke halaman sebelumnya
        return redirect()->back()->with('success', 'Donasi berhasil ditolak');
    } else {
        $riwayat_donasi = DB::table('riwayat_donasis')
            ->when($request->input('user_id'), function ($query, $user_id){
                return $query->where('user_id', 'like', '%' .$user_id. '%');
            })
            ->orderBy('id','asc')->paginate(10);
        return view('pages.riwayat.riwayat_donasi', compact('riwayat_donasi'));
    }
}



}

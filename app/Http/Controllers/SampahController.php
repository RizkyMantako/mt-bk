<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampahController extends Controller
{
    public function index(Request $request)
    {
        $sampahs = DB::table('sampahs')
        ->when($request->input('user_id'), function ($query, $user_id){
            return $query->where('user_id', 'like', '%'.$user_id.'%');
        })
        ->orderBy('id','asc')
        ->paginate(10);
        return view('pages.sampah.sampah', compact( 'sampahs'));
    }


    public function proses(Request $req)
    {
        $proses_sampah = DB::table('proses_sampahs')
        ->when($req->input('user_id'), function ($query, $user_id){
            return $query->where('user_id', 'like', '%' .$user_id. '%');
        })
        ->orderBy('id','asc')->paginate(10);
        return view('pages.proses.proses_sampah', compact('proses_sampah'));
    }

    public function tolak(Request $req)
    {
        $riwayat_sampah = DB::table('riwayat_sampahs')
        ->when($req->input('user_id'), function ($query, $user_id){
            return $query->where('user_id', 'like', '%' .$user_id. '%');
        })
        ->orderBy('id','asc')->paginate(10);
        return view('pages.riwayat.riwayat_sampah', compact('riwayat_sampah'));
    }


}

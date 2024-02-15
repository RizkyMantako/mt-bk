<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
{
    public function index(Request $req)
    {
        $education = DB::table('edukasis')
        -> when($req -> input('sampul'), function ($query, $sampul){
            return $query -> where ('sampul','like',"%$sampul%");
        })->orderBy('id','asc')->paginate(10);
        return view('pages.edukasis.edukasi', compact('education'));
        }
    }

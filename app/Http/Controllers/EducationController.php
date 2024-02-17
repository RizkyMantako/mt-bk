<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
{
    public function index(Request $req)
    {
        $education = Edukasi::when($req->input('sampul'), function ($query, $sampul) {
                return $query->where('sampul', 'like', "%$sampul%");
            })->orderBy('id', 'asc')->paginate(10);
        return view('pages.edukasis.edukasi', compact('education'));
    }

    public function store(Request $req)
    {
   

        // Upload gambar
        if ($req->hasFile('sampul')) {
            $imagePath = $req->file('sampul')->store('sampul_images', 'public');
            Edukasi::create([
                "sampul" => $imagePath,
                "judul" => $req->judul,
                "deskripsi" => $req->deskripsi,
                "link_url" => $req->link_url,
                "tags" => $req->tags ?? 'asdas',
            ]);

            return redirect()->route('edukasis.edukasi')->with('success', 'Edukasi added successfully');
        } else {
            return redirect()->back()->with('error', 'Image upload failed');
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TulisBerita;

class SemuaBeritaController extends Controller
{
    public function index(){
        $title = "semua";
        $berita = TulisBerita::all();
        return view('admin.semua_berita',compact('berita','title'));
        // return view('admin.semua_berita');
    }

    public function detail($id){
        $detail = TulisBerita::find($id);
        return view('admin.detail_berita',compact('detail'));
        // return view('admin.detail_berita');
    }
}

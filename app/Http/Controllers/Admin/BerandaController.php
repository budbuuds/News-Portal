<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TulisBerita;

class BerandaController extends Controller
{
    public function beranda(){
        $berita = TulisBerita::all();
        return view('dashboard',compact('berita'));
        // return view('admin.beranda');
    }
}

<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TulisBerita;


class BeritaDetailController extends Controller
{
    // public function detail($id){
    //     $berita = TulisBerita::find($id);
    //     $post = TulisBerita::find($id);
    //     $post->vzt()->increment();
    //     $post->vzt()->count();
    //     return view('reader.berita_detail',compact('berita','post'));
    // }

    function detail(Request $request,$id){
        TulisBerita::find($id)->increment('views');
        $beritas = TulisBerita::all();
        $berita = TulisBerita::find($id);
        $populer = $beritas->where('status', 1)->SortByDesc('views')->take(4);
        return view('reader.berita_detail',compact('berita','populer'));
    }
}

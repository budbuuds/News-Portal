<?php

namespace App\Http\Controllers;
use App\Models\TulisBerita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $berita = TulisBerita::with('latestPost')->get()->sortByDesc('latestPost.created_at');
        // return view('index');
        $beritas = TulisBerita::all();
        $berita = $beritas->where('status', 1)->SortByDesc('id')->take(4);
        $populer = TulisBerita::all()->where('status', 1)->SortByDesc('views')->take(4);
        $populerr = $beritas->where('status', 1)->SortByDesc('views')->take(1);
        // $sorted = $berita->SortByDesc('created_At');
        return view('index',compact('berita','populer','populerr'));
    }

    public function kategori($id)
    {
        $title = "ktg-".$id;
        $kategori = Kategori::find($id);
        $beritas = TulisBerita::all();
        $beritass = $beritas->where('kategori', $id);
        $berita = $beritass->where('status', 1);
        $sorted = $berita->SortByDesc('created_At');
        $populer = $berita->SortByDesc('views')->take(1);
        return view('kategori',compact('berita','populer','title','kategori'));
    }

    public function semua(){
        $title = "semua";
        // $berita = TulisBerita::with('latestPost')->get()->sortByDesc('latestPost.created_at');
        // return view('index');
        $berita = TulisBerita::all()->where('status', 1)->SortByDesc('id');
        // $berita = $beritas->where('status', 1)->SortByDesc('id');
        $populer = $berita->where('status', 1)->SortByDesc('views')->take(1);
        // $populerr = $beritas->where('status', 1)->SortByDesc('view')->take(1);
        // $sorted = $berita->SortByDesc('created_At');
        return view('semua',compact('berita','populer','title'));
    }
}

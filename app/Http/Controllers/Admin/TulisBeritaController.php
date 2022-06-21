<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TulisBerita;
use App\Models\Kategori;

class TulisBeritaController extends Controller
{
    public function index(){
        return view('admin.tulis_berita');
    }

    public function create(Request $request)
    {    
        $create = TulisBerita::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('img_artikel/',$request->file('gambar')->getClientOriginalName());
            $create->gambar = $request->file('gambar')->getClientOriginalName();
            $create->save();
        }
        return redirect('/dashboard');
    }

    public function edit($id)
    {
        $berita = TulisBerita::find($id);
        $kategori = Kategori::where('kategori', $berita->kategori);
        return view('admin.edit_berita',compact('berita','kategori'));
    }

    public function update(Request $request,$id)
    {
        $berita = TulisBerita::find($id);
        $berita->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('img_artikel/',$request->file('gambar')->getClientOriginalName());
            $berita->gambar = $request->file('gambar')->getClientOriginalName();
            $berita->save();
        }
        return redirect('/dashboard')->with('sukses');
    }

    public function delete($id)
    {
        $berita = TulisBerita::FindOrFail($id);
        $berita->delete();
        return redirect('/dashboard')->with('hapus');
    }
}

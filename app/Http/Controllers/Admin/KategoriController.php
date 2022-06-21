<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function create(Request $request)
    {    
        $create = Kategori::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('img_artikel/',$request->file('gambar')->getClientOriginalName());
            $create->gambar = $request->file('gambar')->getClientOriginalName();
            $create->save();
        }
        return redirect('/dashboard');
    }

    public function update(Request $request,$id)
    {
        $berita = Kategori::find($id);
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
        $berita = Kategori::FindOrFail($id);
        $berita->delete();
        return redirect('/dashboard')->with('hapus');
    }
}

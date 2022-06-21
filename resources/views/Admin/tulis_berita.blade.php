@extends('layouts.header')

@section('link')
@php $title="tulis"; @endphp
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('./admin/assets/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-header">
    <div class="row align-items-center">
      <div class="col">
        <h1>Tulis Berita</h1>
        <div class="text-muted mt-1 ms-1">Tuangkan ide-idemu sekarang juga!</div>
      </div>
    </div>
</div>
<div class="row">
    <form method="POST" action="/tulis/create" enctype="multipart/form-data">
      {{csrf_field()}}
      <div>
        <label for="exampleFormControlTextarea1"></label>
        <input type="hidden" name="views" value="0" class="form-control" type="text" placeholder="0">
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label"><b>Judul</b></label>
            <input type="text" class="form-control" name="judul">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label"><b>Harga</b></label>
            <div class="col">
            <input type="text" class="form-control" name="sumber">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label"><b>Kategori</b></label>
            <div class="col">
              <select class="form-select" name="kategori">
                @foreach ($ktgr_array as $array)
                    <option value="{{$array->id}}">{{$array->kategori}}</option>
                @endforeach
              </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
      <div class="form-group mb-3 row">
          <label class="form-label col-3 col-form-label"><b>Status</b></label>
          <div class="col">
            <select class="form-select" name="status">
              <option value="1">Publik</option>
              <option value="2">Draft</option>
            </select>
          </div>
      </div>
  </div>
    <div class="col-md-6">
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label"><b>Gambar Utama</b></label>
            <div class="col">
                <input type="file" class="form-control" name="gambar">
            </div>
        </div>
    </div>
    <div class="col-12">
        <label class="form-label"><b>Isi</b></label>
        {{-- <div ></div> --}}
        <textarea id="example" name="isi"></textarea>

        <div class="dropdown d-flex justify-content-end">
            {{-- <button class="btn btn-primary dropdown-toggle mt-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
            {{-- <button class="btn btn-primary mt-3" type="button" aria-haspopup="true" aria-expanded="false">  
                Terbitkan Sekarang
            </button> --}}
            <input class="btn btn-primary mt-3" type="submit" value="Terbitkan Sekarang">
            {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Terbitkan Sekarang</a>
              <a class="dropdown-item" href="#">Simpan Sebagai Draft</a>
            </div> --}}
        </div>

    </div>
    </form>
</div>
@endsection

@section('modal')
<div class="modal modal-blur fade" id="md-berhasil" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="border-radius: 7px;">
        <div class="modal-body bg-blue d-flex justify-content-center align-item-center" style="border-radius: 7px;">
            <h3 class="text-white text-h2 mt-3 mb-3"><b>Selamat! Berita sudah berhasil diterbitkan!</b></h3>
        </div>
      </div>
    </div>
</div>
<div class="modal modal-blur fade" id="md-hapus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="border-radius: 7px;">
        <div class="modal-body bg-blue" style="border-radius: 7px;">
            <h3 class="text-white text-center text-h2 mt-3 mb-3"><b>Apakah Anda yakin akan menghapus berita?</b></h3>
            <div class="d-flex justify-content-center">
                <button class="btn btn-default px-3 me-4">Tidak</button>
                <button class="btn btn-danger px-4">Ya</button>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>

<script>
$(document).ready(function(){
    // $('#md-hapus').modal('show');
    setTimeout(function(){ $('#md-berhasil').modal('hide'); }, 2000);
    var editor = new FroalaEditor('#example');
})
</script>
@endsection


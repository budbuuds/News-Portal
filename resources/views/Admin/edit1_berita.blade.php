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
        <h1>Edit Berita</h1>
        <div class="text-muted mt-1 ms-1">Tuangkan ide-idemu sekarang juga!</div>
      </div>
    </div>
</div>
<div class="row">
    <form method="get" action="">
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label"><b>Judul</b></label>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label"><b>Kategori</b></label>
            <div class="col">
              <select class="form-select">
                <option>Kategori 1</option>
                <option>Kategori 2</option>
                <option>Kategori 3</option>
              </select>
            </div>
        </div>
    </div>
    <div class="col-12">
        <label class="form-label"><b>Isi</b></label>
        {{-- <div ></div> --}}
        <textarea id="example" name="desk"></textarea>

        <div class="dropdown d-flex justify-content-end">
            <button class="btn btn-primary dropdown-toggle mt-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Terbitkan Sekarang
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Terbitkan Sekarang</a>
              <a class="dropdown-item" href="#">Simpan Sebagai Draft</a>
            </div>
        </div>

    </div>
    </form>
</div>
@endsection

@section('modal')
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>

<script>
$(document).ready(function(){
    var editor = new FroalaEditor('#example');
})
</script>
@endsection


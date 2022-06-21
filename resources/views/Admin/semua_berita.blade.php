@extends('layouts.header')

@section('link')
@php $title="semua"; @endphp
<link href="{{ asset('./admin/assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="row">
    <div class="col-12" style="overflow-x: auto">
        <div class="mb-3">
            <header class="navbar navbar-expand-md navbar-transparent d-print-none">
              <div class="container-xl">
                <h1>
                  Semua Berita
                </h1>
                <div class="col-md-6">
                    <form action="." method="get">
                        <div class="row g-2">
                            <div class="col-auto align-self-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Search" style="border: 1px solid #e2e2e2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <div class="col-12 mb-5">
            <p class="text-muted ms-2">Kumpulan berita yang sudah kamu tulis</p>
            <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                Tulis Berita
            </button>
        </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table card-table table-vcenter text-nowrap" id="datatable">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center">BERITA</th>
                        <th class="text-center">STATUS</th>
                        <th class="text-center">TINDAKAN</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $data)
                        <tr>
                            <td>
                                {{-- <span class="avatar rounded" style="background-image: url({{ asset('img_artikel/img1.png') }})"></span> --}}
                                <span class="avatar rounded" style="background-image: url({{ asset('img_artikel/'.$data -> gambar) }})"></span>
                            </td>
                            <td>
                                <a href="/admin/detail/{{ $data -> id}}" style="color: black">
                                    <h3>{{$data->judul}}</h3>
                                </a>
                                <p><small>Ditulis oleh {{$data->penulis}} pada: {{$data->tanggal}}    {{$data->pukul}} WIB</small></p>
                            </td>
                            <td>
                                @php
                                    $status = $data -> status;
                                    if ($status=="1") {
                                        echo "Public";
                                        // <button class="btn btn-primary">Publik</button>
                                    }
                                    else {
                                        echo "Draft";
                                        // <button class="btn btn-primary">Draft</button>
                                    }
                                @endphp
                                {{-- <button class="btn btn-primary">{{$data->status}}</button> --}}
                            </td>
                            <td>
                                <a href="/tulis/{{$data->id}}/edit" class="btn btn-ghost-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-orange hover-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                                    Edit</a>
                                <button class="btn btn-ghost-danger" data-bs-toggle="modal" data-bs-target="#md-hapus-berita{{$data->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red hover-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                        {{-- <tr>
                            <td><span class="avatar rounded" style="background-image: url({{ asset('img_artikel/img1.png') }})"></span></td>
                            <td>
                                <a href="{{ url('/admin/detail') }}" style="color: black">
                                    <h3>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang Menerimanya?</h3>
                                </a>
                                <p><small>Ditulis oleh Admin pada: 22/12/2020    16.40 WIB</small></p>
                            </td>
                            <td>
                                <button class="btn btn-primary">Publik</button>
                            </td>
                            <td>
                                <button class="btn btn-ghost-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-orange hover-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                                    Edit</button>
                                <button class="btn btn-ghost-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red hover-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="avatar rounded" style="background-image: url({{ asset('img_artikel/img1.png') }})"></span></td>
                            <td>
                                <a href="{{ url('/admin/detail') }}" style="color: black">
                                    <h3>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang Menerimanya?</h3>
                                </a>
                                <p><small>Ditulis oleh Admin pada: 22/12/2020    16.40 WIB</small></p>
                            </td>
                            <td>
                                <button class="btn btn-primary">Publik</button>
                            </td>
                            <td>
                                <button class="btn btn-ghost-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-orange hover-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                                    Edit</button>
                                <button class="btn btn-ghost-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red hover-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    Hapus</button>
                            </td>
                        </tr> --}}
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('modal')
@foreach ($berita as $data)
<div class="modal modal-blur fade" id="md-hapus-berita{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body bg-dark">
            <h3 class="text-white text-h1 text-center mb-4"><b>Apakah Anda yakin akan menghapus berita "{{$data->judul}}"?</b></h3>
            <div class="d-flex justify-content-around w-100 mb-2">
                <a href="#" class="btn btn-outline-light px-5" data-bs-dismiss="modal">Tidak</a>
                <a href="/tulis/{{$data->id}}/delete" class="btn btn-danger px-5">Ya</a>
            </div>
        </div>
      </div>
    </div>
</div>

@endforeach
@endsection

@section('script')
<script src="{{ asset('./admin/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('./admin/assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
$(document).ready(function(){
    $('#datatable').DataTable({});
})
</script>
@endsection


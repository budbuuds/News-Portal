@extends('layouts.header')

@section('link')
@php $title="semua"; @endphp
@endsection

@section('content')
<div class="row">
    <div class="col-md-9 pe-5">
        <h2><b>{{$detail->judul}}</b></h2>
        <p><small>Ditulis oleh 
            Admin pada : {{$detail->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->pukul}} WIB</small></p>
        <div class="card-img-bottom img-responsive img-responsive-16by9" style="background-image: url({{ asset('img_artikel/'.$detail -> gambar) }})"></div>
        <p><small>Sumber Foto : {{$detail->sumber}}</small></p>
        {!!$detail->isi!!}
    </div>
    <div class="col-md-3 px-4 py-4" style="background-color: #F3F3F3;border-radius:5px;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
        <h2 class="mb-3"><b>Status</b></h2>
        <button class="btn btn-primary px-5 mb-3">{{$detail->status}}</button>
        <p class="mb-0"><small>Ditulis oleh {{$detail->penulis}}</small></p>
        <p class="mb-0"><small>Tanggal : {{$detail->tanggal}}</small></p>
        <p><small>Pukul     : {{$detail->pukul}} WIB</small></p>
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
            456
        </p>
        <button class="btn btn-ghost-warning">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-orange hover-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
            Edit</button>
        <button class="btn btn-ghost-danger">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red hover-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
            Hapus</button>
    </div>
</div>
@endsection

@section('modal')
@endsection

@section('script')
<script>
$(document).ready(function(){
})
</script>
@endsection


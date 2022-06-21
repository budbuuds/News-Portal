@extends('layouts.header_reader')

@section('link')
@endsection

@section('content')
<!-- Page title -->
<div class="page-header d-print-none">
    <div class="row align-items-center">
      <div class="col">
        <!-- Page pre-title -->
        <h2 class="h1">
          <b>RACANA SWARNADWIPA</b>
        </h2>
      </div>
    </div>
</div>
<div class="row row-deck row-cards">
    <div class="col-md-8">
        <div class="card border-0" style="box-shadow: none;">
            <div class="card-body p-0">
                <div id="carousel-captions" class="carousel slide mb-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active c-gradient">
                            @foreach ($populer as $data)
                            <img class="d-block w-100" style="height: 400px;" alt="" src="{{asset('img_artikel/'.$data -> gambar)}}">
                            <div class="carousel-item-background d-none d-md-block"></div>
                            <div class="carousel-caption d-md-block pb-0" style="left: 2%;bottom:0;z-index:2;">
                                <a href="/detail/{{$data->id}}" class="text-white"><h1 class="text-left text-bold">{{$data->judul}}</h1></a>
                                <p class="text-left">Ditulis oleh Admin pada : {{$data->created_at}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-bold mb-3">Terbaru</h1>
                        @foreach ($berita as $data)
                        <div class="row border-bottom mb-3 me-2 ps-0">
                            <div class="col-3 h-75 ps-0">
                                <a href="/detail/{{$data->id}}"><img class="c-img-responsive" src="{{asset('img_artikel/'.$data -> gambar)}}"></a>
                            </div>
                            <div class="col-9">
                                <a href="/detail/{{$data->id}}" class="text-dark"><p>{{$data->judul}}</p></a>
                                <p class="text-muted"><small>Ditulis oleh Admin pada: {{$data->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="row border-bottom mb-3 me-2 ps-0">
                            <div class="col-3 h-75 ps-0">
                                <a href="#"><img class="c-img-responsive" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}"></a>
                            </div>
                            <div class="col-9">
                                <a href="#" class="text-dark"><p>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang menerimanya?</p></a>
                                <p class="text-muted"><small>Ditulis oleh Admin pada: 22/12/2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                            </div>
                        </div>
                        <div class="row border-bottom mb-3 me-2 ps-0">
                            <div class="col-3 h-75 ps-0">
                                <a href="#"><img class="c-img-responsive" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}"></a>
                            </div>
                            <div class="col-9">
                                <a href="#" class="text-dark"><p>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang menerimanya?</p></a>
                                <p class="text-muted"><small>Ditulis oleh Admin pada: 22/12/2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                            </div>
                        </div>
                        <div class="row border-bottom mb-3 me-2 ps-0">
                            <div class="col-3 h-75 ps-0">
                                <a href="#"><img class="c-img-responsive" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}"></a>
                            </div>
                            <div class="col-9">
                                <a href="#" class="text-dark"><p>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang menerimanya?</p></a>
                                <p class="text-muted"><small>Ditulis oleh Admin pada: 22/12/2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                            </div>
                        </div> --}}
                        {{-- <a href="#"><b>Lihat Semua</b></a> --}}
                    </div>
                    {{-- <div class="col-md-6">
                        <h1 class="text-bold mb-3">Terpopuler</h1>
                        <div class="row border-bottom mb-3 me-2 ps-0">
                            <div class="col-3 h-75 ps-0">
                                <a href="#"><img class="c-img-responsive" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}"></a>
                            </div>
                            <div class="col-9">
                                <a href="#" class="text-dark"><p>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang menerimanya?</p></a>
                                <p class="text-muted"><small>Ditulis oleh Admin pada: 22/12/2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                            </div>
                        </div>
                        <div class="row border-bottom mb-3 me-2 ps-0">
                            <div class="col-3 h-75 ps-0">
                                <a href="#"><img class="c-img-responsive" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}"></a>
                            </div>
                            <div class="col-9">
                                <a href="#" class="text-dark"><p>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang menerimanya?</p></a>
                                <p class="text-muted"><small>Ditulis oleh Admin pada: 22/12/2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                            </div>
                        </div>
                        <div class="row border-bottom mb-3 me-2 ps-0">
                            <div class="col-3 h-75 ps-0">
                                <a href="#"><img class="c-img-responsive" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}"></a>
                            </div>
                            <div class="col-9">
                                <a href="#" class="text-dark"><p>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang menerimanya?</p></a>
                                <p class="text-muted"><small>Ditulis oleh Admin pada: 22/12/2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                            </div>
                        </div>
                        <div class="row border-bottom mb-3 me-2 ps-0">
                            <div class="col-3 h-75 ps-0">
                                <a href="#"><img class="c-img-responsive" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}"></a>
                            </div>
                            <div class="col-9">
                                <a href="#" class="text-dark"><p>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang menerimanya?</p></a>
                                <p class="text-muted"><small>Ditulis oleh Admin pada: 22/12/2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                            </div>
                        </div>
                        <a href="#"><b>Lihat Semua</b></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row w-100" style="display: flex; flex-direction:column">
            <div class="col-12 mb-4">
                <a href="#">
                    <img style="width:100%;height:180px;" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-12 mb-4">
                <a href="#">
                    <img style="width:100%;height:180px;" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-12 mb-4">
                <a href="#">
                    <img style="width:100%;height:180px;" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}" alt="">
                </a>
            </div>
        </div>
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


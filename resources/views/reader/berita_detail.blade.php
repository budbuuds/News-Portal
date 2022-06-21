@extends('layouts.header_reader')

@section('link')
@php $title=""; @endphp
@endsection

@section('content')
<!-- Page title -->
<div class="page-header d-print-none">
    <div class="row align-items-center">
      <div class="col">
        <!-- Page pre-title -->
        <h2 class="h1">
          <b>{{$berita->judul}}</b>
        </h2>
        <p class="text-left text-muted mb-0"><small>Ditulis oleh Admin pada : {{$berita->created_at}} WIB</small></p>
      </div>
    </div>
</div>
<div class="row row-deck row-cards">
    <div class="col-md-8">
        <div class="card border-0" style="box-shadow: none;">
            <div class="card-body p-0">
                <div id="carousel-captions" class="carousel slide mb-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" style="" alt="" src="{{asset('img_artikel/'.$berita -> gambar)}}">
                            <div class="carousel-item-background d-none d-md-block"></div>
                        </div>
                    </div>
                    {{-- <p class="text-muted"><small>Sumber Foto : Unplash.com</small></p> --}}
                    {{-- {{$post->count}} --}}
                </div>
                <div class="row">
                    <div class="col-12 text-justify">
                        {{-- <p>{{$berita->isi}}</p> --}}
                        {!! $berita->isi !!}
                        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident mollitia magnam alias id dolor, necessitatibus tenetur eum quibusdam, cupiditate voluptates atque blanditiis odit voluptate nobis ea libero rerum architecto quia.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident mollitia magnam alias id dolor, necessitatibus tenetur eum quibusdam, cupiditate voluptates atque blanditiis odit voluptate nobis ea libero rerum architecto quia.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque voluptatum voluptate vel voluptatibus explicabo iste odio excepturi minus. Rerum, enim. Veniam consectetur maiores beatae praesentium blanditiis rerum numquam quidem quod? Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda id illo hic voluptas quod quis amet quo blanditiis aut, cumque ratione, accusantium eaque. Doloremque officiis assumenda tempora? Aut, ea facere.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat minus, facilis enim ea, accusamus quisquam natus vel officiis sit magni fuga totam adipisci facere numquam animi! Voluptatibus at maxime laboriosam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis a id. Vero deserunt illo, sit autem impedit distinctio, aspernatur recusandae eos ratione est, quis atque perspiciatis ea praesentium minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus deleniti illo similique enim reprehenderit in corrupti numquam fugiat, quo nemo corporis excepturi ipsum quos rem tempora soluta dolorem adipisci cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit corporis, a architecto animi beatae doloremque vero repudiandae voluptate incidunt, numquam similique velit nostrum rem nulla ea praesentium distinctio id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias natus, aliquid blanditiis tempore rem neque cupiditate voluptas ducimus asperiores reiciendis? Nesciunt vel magnam laboriosam reiciendis iste, necessitatibus ducimus laborum nulla.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit placeat alias quo ut quae quam delectus eos labore, deleniti, sequi similique ipsam voluptas neque natus soluta. Nihil officiis dolore minima. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat pariatur fuga minus, quam nisi culpa cumque veritatis repellat totam nesciunt inventore delectus ex soluta consequatur perferendis beatae saepe non natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus alias aspernatur eos asperiores quam! Ratione necessitatibus, suscipit voluptatibus commodi beatae quasi maiores, harum blanditiis at, temporibus ex? Porro, nobis quod? Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, obcaecati. Nisi, libero? Illum suscipit optio exercitationem explicabo aspernatur harum eum fuga dolore minus enim obcaecati sunt, impedit fugit tempora nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem consequatur consectetur commodi aliquid repellat ullam enim, placeat, nobis corporis, beatae voluptate dolore mollitia maxime quasi officia tempore libero unde repudiandae?</p> --}}
                    </div>
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
            <h1 class="text-bold mb-3">Baca Juga</h1>
            @foreach ($populer as $data)
            <div class="row border-bottom mb-3 mx-2 ps-0">
                <div class="col-3 h-75 ps-0">
                    <a href="/detail/{{$data->id}}"><img class="c-img-responsive" src="{{asset('img_artikel/'.$data -> gambar)}}"></a>
                </div>
                <div class="col-9">
                    <a href="/detail/{{$data->id}}" class="text-dark"><p>{{$data->judul}}</p></a>
                    <p class="text-muted"><small>Ditulis oleh Admin pada: {{$data->created_at}} WIB</small></p>
                </div>
            </div>
            @endforeach
            {{-- <div class="row border-bottom mb-3 mx-2 ps-0">
                <div class="col-3 h-75 ps-0">
                    <a href="#"><img class="c-img-responsive" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}"></a>
                </div>
                <div class="col-9">
                    <a href="#" class="text-dark"><p>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang menerimanya?</p></a>
                    <p class="text-muted"><small>Ditulis oleh Admin pada: 22/12/2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                </div>
            </div>
            <div class="row border-bottom mb-3 mx-2 ps-0">
                <div class="col-3 h-75 ps-0">
                    <a href="#"><img class="c-img-responsive" src="{{asset('reader/static/photos/9f36332564ca271d.jpg')}}"></a>
                </div>
                <div class="col-9">
                    <a href="#" class="text-dark"><p>Kemenkes Mulai Kirim SMS Vaksinasi, Siapa Saja yang menerimanya?</p></a>
                    <p class="text-muted"><small>Ditulis oleh Admin pada: 22/12/2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.40 WIB</small></p>
                </div>
            </div> --}}
            <a href="#"><b>Lihat Semua</b></a>
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


<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.21
* @link https://tabler.io
* Copyright 2018-2020 The Tabler Authors
* Copyright 2018-2020 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Pramuka Unand</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- CSS files -->
    @yield('link')
    <link href="{{asset('reader/dist/css/tabler.css')}}" rel="stylesheet"/>
    <link href="{{asset('reader/dist/css/demo.css')}}" rel="stylesheet"/>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

  </head>
  <body class="antialiased">
    <div class="page">
      <header class="navbar navbar-expand-md bg-blue d-print-none">
        <div class="container-fluid mobile-center">
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="/">
              <span class="text-white"><span class="p-1" style="background-color: #F0112B;">Pramuka</span> Unand</span>
            </a>
            <span class="text-white ms-4 mt-1 mobile-none">RACANA SWARNADWIPA</span>
          </h1>

          <div class="navbar-nav flex-row order-md-last col-md-4">
            <div class="nav-item d-md-flex me-3 col-10">
                <div class="row g-2">
                    <div class="col-auto align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="10" cy="10" r="7"></circle><line x1="21" y1="21" x2="15" y2="15"></line></svg>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control c-search" placeholder="Search">
                    </div>
                </div>
            </div>
            <div class="nav-item">
              <a href="{{url('/login')}}" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="7" r="4" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
              </a>
            </div>
          </div>
        </div>
      </header>
      <div class="navbar-expand-md">
        <div class="" id="navbar-menu">
          <div class="container-xl">
            <div class="navbar navbar-light">
              <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link nav-link-logo" href="/" >
                      <span class="nav-link-title">
                            <span class="text-black font-bold"><span class="p-1 text-white" style="background-color: #F0112B;">Pramuka</span> Unand</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item @php if($title=="semua"){echo"active";} @endphp">
                    <a class="nav-link" href="/semua" >
                      <span class="nav-link-title">
                        Semua
                      </span>
                    </a>
                  </li>
                @foreach ($ktgr_array as $array)
                <li class="nav-item  @php if($title=="ktg-".$array->id){echo"active";} @endphp">
                  <a class="nav-link" href="/kategori/{{$array->id}}" >
                    <span class="nav-link-title">
                      {{$array->kategori}}
                    </span>
                  </a>
                </li>
                @endforeach
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#" >
                      <span class="nav-link-title">
                        Olahraga
                      </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >
                      <span class="nav-link-title">
                        Sains & Teknologi
                      </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >
                      <span class="nav-link-title">
                        Hiburan
                      </span>
                    </a>
                </li> --}}
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="container-xl">
            @yield('content')
        </div>
        <footer class="footer">
        <div style="width: 100%;height:14px;" class="bg-blue mb-3"></div>
          <div class="container-fluid">
            <div class="row text-center align-items-center">
              <div class="col-md-12 position-relative">
                  <div class="row">
                      <div class="col-2 ps-0 ms-0">
                        <span class="text-black font-bold"><span class="p-1 text-white" style="background-color: #F0112B;">Pramuka</span> Unand</span>
                      </div>
                      <div class="text-center d-inline col-8">
                          <p class="mb-0">Copyright 2021 www.pramukaunand.com</p>
                          <p>All right reserved</p>
                      </div>
                  </div>
              </div>
              <!-- <div class="col-md-5 mt-3 mt-lg-0">
                  <div class="row">
                    <div class="col-2">
                        <p class="text-dark text-left"><b>Kategori</b></p>
                    </div>
                    <div class="col-5">
                        <ul class="list-inline list-inline-dots text-left d-inline-block">
                            <li><a href="#" class="link-secondary">Politik</a></li>
                            <li><a href="#" class="link-secondary">Sains & Teknologi</a></li>
                            <li><a href="#" class="link-secondary">Olahraga</a></li>
                            <li><a href="#" class="link-secondary">Hiburan</a></li>
                        </ul>
                    </div>
                    <div class="col-5">
                        <ul class="list-inline list-inline-dots text-left d-inline-block">
                            <li><a href="#" class="link-secondary">Kategori</a></li>
                            <li><a href="#" class="link-secondary">Kategori</a></li>
                            <li><a href="#" class="link-secondary">Kategori</a></li>
                            <li><a href="#" class="link-secondary">Kategori</a></li>
                        </ul>
                    </div>
                </div>
              </div> -->
            </div>
          </div>
        </footer>
      </div>
    </div>
    @yield('modal')
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{asset('reader/dist/js/tabler.min.js')}}"></script>
    @yield('script')
  </body>
</html>

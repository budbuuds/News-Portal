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
    <title>Daihatsu Bukittinggi | Admin</title>
    <!-- CSS files -->
    @yield('link')
    {{-- <link href="./assets/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/> --}}
    <link href="{{ asset('./admin/assets/css/tabler.css') }}" rel="stylesheet"/>
    {{-- <link href="./assets/css/tabler-vendors.min.css" rel="stylesheet"/> --}}
    {{-- <link href="./assets/css/demo.min.css" rel="stylesheet"/> --}}
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </head>
  <body class="antialiased">
    <div class="page">
      <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark">
            <a href="#">
                <span class="avatar rounded-circle">
                    <img src="{{ asset('img_profil/profil1.png') }}" alt="Tabler">
                </span>
            </a>
          </h1>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
              <li class="nav-item mb-3 <?php if($title=="beranda"){echo"active";} ?>">
                <a class="nav-link" href="{{ url('/admin/beranda') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Beranda
                  </span>
                </a>
              </li>
              <li class="nav-item mb-3 <?php if($title=="tulis"){echo"active";} ?>">
                <a class="nav-link" href="{{ url('/admin/tulis') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Tambah Post
                  </span>
                </a>
              </li>
              <li class="nav-item mb-3 <?php if($title=="semua"){echo"active";} ?>">
                <a class="nav-link" href="{{ url('/admin/semua') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Semua Post
                  </span>
                </a>
              </li>
              <li class="nav-item mb-3" style="position: absolute;bottom:0;">
                <a class="nav-link" href="{{ url('/keluar') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Keluar
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>
      <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container">
            <div class="row text-center align-items-center justify-content-center">
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2021
                    <a href="https://neotelemetri.com/main/" class="link-secondary">Neo Telemetri</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="link-secondary" rel="noopener">v1.0.0-alpha.21</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    @yield('modal')
    <!-- Libs JS -->
    <script src="{{ asset('./admin/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('./admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="./assets/libs/jquery/dist/jquery.slim.min.js"></script> --}}
    {{-- <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script> --}}
    {{-- <script src="./assets/libs/jqvmap/dist/jquery.vmap.min.js"></script> --}}
    {{-- <script src="./assets/libs/jqvmap/dist/maps/jquery.vmap.world.js"></script> --}}
    <!-- Tabler Core -->
    <script src="{{ asset('./admin/assets/js/tabler.min.js') }}"></script>
    @yield('script')
  </body>
</html>

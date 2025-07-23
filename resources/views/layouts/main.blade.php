<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {{-- <title>Laravel</title> --}}

      @yield('meta')
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- Styles -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      {{-- <title>yt.digimar.id - Strategi YouTube Cerdas untuk Tumbuh Lebih Cepat</title>
      <meta name="title" content="yt.digimar.id - Strategi YouTube Cerdas untuk Tumbuh Lebih Cepat">
      <meta name="description" content="Buat konten menarik, tingkatkan subscriber, dan dorong konversi bisnis lewat strategi YouTube dari Digimar.">
      <meta name="keywords" content="youtube marketing, strategi youtube, konten video, channel bisnis, subscriber youtube, video promosi, optimasi youtube, digimar youtube, video youtube, youtube channel, konten youtube, video viral"> --}}
      <meta name="author" content="yt.digimar.id">
      <meta property="og:title" content="yt.digimar.id - Strategi YouTube Cerdas untuk Tumbuh Lebih Cepat">
      <meta property="og:description" content="Buat konten menarik, tingkatkan subscriber, dan dorong konversi bisnis lewat strategi YouTube dari Digimar.">
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://yt.digimar.id">
      <meta property="og:image" content="{{ asset('logodark.svg') }}">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="yt.digimar.id - Strategi YouTube Cerdas untuk Tumbuh Lebih Cepat">
      <meta name="twitter:description" content="Buat konten menarik, tingkatkan subscriber, dan dorong konversi bisnis lewat strategi YouTube dari Digimar.">
      <meta name="twitter:image" content="{{ asset('logodark.svg') }}">

      <style>
         .card {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

         .text-ellipsis {
             display: -webkit-box;
             -webkit-line-clamp: 3; /* Tentukan jumlah baris yang ingin ditampilkan */
             -webkit-box-orient: vertical;
             overflow: hidden;
             text-overflow: ellipsis;
             max-height: 4.5em; /* Sesuaikan dengan tinggi satu baris teks */
         }
     </style>
     @yield('styles')
   </head>
   <body class="antialiased">
      <!-- Header -->
      <div class="header" style="background-color: #fff3f5">
         <div class="container" style="background-color: #fff3f5">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #fff3f5 !important">
               <div class="container-fluid" style="background-color: #fff3f5">
                  <a class="navbar-brand" href="#">
                     <img src="https://www.digimar.id/icon/logo_digimar.png" style="width: 150px;height:50px" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                     <ul class="navbar-nav ms-auto">
                        
                        <li class="nav-item">
                           <a class="nav-link" href="https://digitalmarketing.digimar.id">{{ __('navbar.nav_1') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://youtube.digimar.id">{{ __('navbar.nav_2') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://x.digimar.id">{{ __('navbar.nav_3') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://tiktok.digimar.id">{{ __('navbar.nav_3_1') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://ig.digimar.id">{{ __('navbar.nav_4_1') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://instagram.digimar.id">{{ __('navbar.nav_5_1') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://yt.digimar.id">{{ __('navbar.nav_6') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://socialmedia.digimar.id">{{ __('navbar.nav_7') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://sosialmedia.digimar.id">{{ __('navbar.nav_7_1') }}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://affiliate.digimar.id">{{ __('navbar.nav_8') }}</a>
                        </li>
                        {{-- <li class="nav-item">
                           <a class="nav-link" href="{{ url('kontak-kami') }}">{{ __('navbar.contact') }}</a>
                        </li> --}}
                        @php
                            $locale = App::getLocale();

                           //  dd($locale);
                              if ($locale === 'id') {
                                 $lang = __('navbar.nav_4');
                              } elseif ($locale === 'en') {
                                 $lang = __('navbar.nav_4');
                              } elseif ($locale === 'zh') {
                                 $lang = __('navbar.nav_4');
                              } elseif ($locale === 'ar') {
                                 $lang = __('navbar.nav_4');
                              } else {
                                 $lang = __('navbar.nav_4'); // default
                              }
                        @endphp
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle font-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{ __('navbar.image_nav') }}" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt="">
                              <b>{{ $lang }}</b>
                           </a>
                           <ul class="dropdown-menu" style="min-width: 160px;">
                              <li><a class="dropdown-item" href="#" onclick="changeLanguage('id')"><img src="https://www.indonesiacore.com/_astro/id.COWC0E3n.svg" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt=""><span>Indonesia</span></a></li>
                              <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')"><img src="https://www.indonesiacore.com/_astro/en.DTXiLQoe.svg" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt=""><span>English</span></a></li>
                              <li><a class="dropdown-item" href="#" onclick="changeLanguage('zh')"><img src="https://www.indonesiacore.com/_astro/zh.DifnnI3t.svg" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt="">中文</a></li>
                              <li><a class="dropdown-item" href="#" onclick="changeLanguage('ar')"><img src="https://www.indonesiacore.com/_astro/sa.DMELvfVN.svg" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt=""><span>العربية</span></a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <div class="dark-overlay"></div>
      <!-- Header End -->
      <!-- Page Content -->
      <div class="page-content">
      <div class="content-inner pt-0">
      <div class="container p-b50" style="background-color: #e6e8e6">
         @yield('content')
      </div>
      <!-- Page Content End-->
      <script>
         function changeLanguage(locale) {
            window.location.href = `/lang/${locale}`;
         }
      </script>
      <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-94L5P04WT0"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-94L5P04WT0'); </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   </body>
</html>
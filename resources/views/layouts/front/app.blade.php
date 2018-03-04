<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="Toko Kain, Toko Bahan, Pasar Tegal Gubuk, Pasar Tegal Gubug, Pasar Baju Asia, Toko Kain Murah Cirebon, Cirebon Pasar Kain, Batik, Kerudung">
  <meta name="description" content="Pasar Sandang Murah Se-Asia, Belanja Online Kain Super Murah, Kualitas Terbaik Harga Bersaing">
  <!-- Favicons Icon -->
  <link rel="icon" href="#" type="image/x-icon" />
  <link rel="shortcut icon" href="#" type="image/x-icon" />
  <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>
  <!-- Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/simple-line-icons.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/owl.carousel.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/owl.theme.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/jquery.bxslider.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/jquery.mobile-menu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/style.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/revslider.css') }}">
  @yield('styles')
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet">
</head>
  @stack('body-tag')
  <div id="page">
    <div class="top-banners">
      {{--  <div class="banner"> Populate this marketing banner to advertise a special promotion such as: <span>Save 20%</span> this weekend! </div>  --}}
    </div>
    <!-- Header -->
    @include('layouts.front.partials._header')
    <!-- end header -->
    @yield('content')
    <!-- Footer -->
    @include('layouts.front.partials._footer')
    <!-- End Footer -->
  </div>
  <!-- mobile menu -->
  @include('layouts.front.partials._mobile-menu')
  <!-- JavaScript -->
  <script type="text/javascript" src="{{ asset('assets/front/js/jquery-3.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/front/js/revslider.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/front/js/common.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/front/js/jquery.mobile-menu.min.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('assets/front/js/cloud-zoom.js') }}"></script>
  @yield('scripts')
</Body>
</html>
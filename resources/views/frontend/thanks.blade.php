<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_des')">
    <meta name="author" content="HQH">
    <meta name="keywords" content="@yield('meta_key')">
    <meta name="twitter:card" content="summary" />
    <meta property="og:site_name" content="{{ $setting->$get_name }}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title_seo')" />
    <meta name="twitter:description" content="@yield('meta_des')" />
    <meta name="twitter:title" content="@yield('title_seo')" />
    <title>@yield('title')</title>
    <link rel="canonical" href="@yield('canonical')"/>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/phonering.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/menu1.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reponsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/mobile.css') }}">
    {!! $setting->thead !!}
</head>
<body>
    <div class="thanks">
     <p>Cảm ơn bạn đã gửi thông tin ! </p>

     <div class="thanks2">
         Quay lại trang chủ <a href="{{route('index')}}">Click here </a>
     </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>

    {{-- @include('frontend.partials.slick') --}}
    @yield('script')
    <!-- Subiz -->

<!-- End Subiz -->
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <meta charset="utf-8">
        <link rel="dns-prefetch" href="#" />
        <link rel="preload"
              href="https://public-assets.envato-static.com/assets/generated_sprites/logos-20f56d7ae7a08da2c6698db678490c591ce302aedb1fcd05d3ad1e1484d3caf9.png"
              as="image" />
        <link rel="preload"
              href="https://public-assets.envato-static.com/assets/generated_sprites/common-5af54247f3a645893af51456ee4c483f6530608e9c15ca4a8ac5a6e994d9a340.png"
              as="image" />
    
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="Indotradex">
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
        <meta name="turbo-visit-control" content="reload">
    
        <!-- css start -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" media="all" href="{{asset('frontend/assets/css/indotradex.css')}}" />
        <link rel="stylesheet" media="all" href="{{asset('frontend/assets/css/mobile.css')}}" />
        <link href="https://www.aspireindia.com/itforte/assets/css/owl.carousel.min.css" rel="Stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    
        <!-- javascript start -->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
                integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
                integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
                crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.aspireindia.com/itforte/assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/indotradex.js')}}"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>

        @include('frontend.inc.top_nav')
        <!-- header end -->
        <!-- navbar start -->
        @include('frontend.inc.header')
        {{ $slot }}
        @include('frontend.inc.footer')
    </body>
</html>

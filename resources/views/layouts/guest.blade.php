<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="dns-prefetch" href="#" />
        <link rel="preload"
            href="https://public-assets.envato-static.com/assets/generated_sprites/logos-20f56d7ae7a08da2c6698db678490c591ce302aedb1fcd05d3ad1e1484d3caf9.png"
            as="image" />
        <link rel="preload"
            href="https://public-assets.envato-static.com/assets/generated_sprites/common-5af54247f3a645893af51456ee4c483f6530608e9c15ca4a8ac5a6e994d9a340.png"
            as="image" />
    
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <title>Indotradex</title>
        <meta name="description" content="Indotradex">
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
        <meta name="turbo-visit-control" content="reload">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- css start -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" media="all" href="{{asset('frontend/assets/css/indotradex.css')}}" />
        <link rel="stylesheet" media="all" href="{{asset('frontend/assets/css/mobile.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    
        <!-- javascript start -->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <script type="text/javascript" src="https://www.aspireindia.com/itforte/assets/js/owl.carousel.min.js"></script> -->
        <script type="text/javascript" src="{{asset('frontend/assets/js/indotradex.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/custom.js')}}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    @php 
    $setting  = App\Models\setting::first();
    @endphp
           <!-- header start -->
    <header class="hea-div position-relative py-md-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2  d-none">
                    <div class="hea-sel">
                        <select class="">
                            <option value="en">En<i class="ri-arrow-down-s-fill ms-1"></i></option>
                            <option value="indo">Indo<i class="ri-arrow-down-s-fill ms-1"></i></option>
                        </select>
                    </div>
                </div>
                @if(isset($setting->nav_header))
                <div class="col-lg-12 col-xl-12">
                    <div class="hea-div-box text-center">
                        <a href="javascript:void(0)" class="text-decoration-none" role="link">
                            <p class="mb-0 pb-0">
                               {{ $setting->nav_header }} <span class="new ms-2">New</span>
                            </p>
                        </a>
                    </div>
                </div>
                @endif
                <div class="col-lg-3 col-xl-3 d-none">
                    <div class="hea-sea-div d-flex justify-content-end align-items-center">
                        <div class="hea-sea-box">
                            <input type="text" class="form-control" id="search" placeholder="Enter Your Products..." />
                        </div>
                        <i class="ri-search-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- navbar start -->
    <section class="nav-div position-relative py-md-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-xl-3  col-md-5 col-7" >
                    <div class="d-flex align-items-center">
                        <div class="menu-icon d-lg-none d-block" id="menu-icon">
                            <img src="{{asset('frontend/assets/img/icon/menu.svg')}}" class="img-fluid" alt="Menu Icon" title="Menu" />
                            <img src="{{asset('frontend/assets/img/icon/close.svg')}}" class="img-fluid d-none" alt="Menu Icon" title="Menu" />
                        </div>
                        <div class="log-div ms-lg-0 ms-md-2 ms-3">
                            <a href="{{route('/')}}" class="text-decoration-none" role="link">
                                <h1><span>Indo</span>Tradex</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-9 col-md-7 col-5" >
                    <div class="navbar-div d-flex align-items-center justify-content-end">
                        <div class="nav-div-lst">
                            <ul class="list-unstyled d-md-flex d-grid align-items-md-center mb-0">
                                <li>
                                    <a href="{{ route('/')}}" class="text-decoration-none">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about')}}" class="text-decoration-none">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('membership')}}" class="text-decoration-none">Membership</a>
                                </li>

                                <li>
                                    <a href="{{route('trading')}}" class="text-decoration-none">Products</a>
                                </li>

                                <li>
                                    <a href="{{route('business')}}" class="text-decoration-none">Services</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}" class="text-decoration-none">Contact Us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="nav-div-btn position-relative ms-md-4">
                            <ul class="list-unstyled  d-md-flex d-flex align-items-md-center  ms-md-4 mb-0">
                                <li class="d-flex align-items-center">
                                    <a href="javascript:void(0)"
                                        class="text-decoration-none d-lg-none d-block align-items-center" role="link">
                                        <img  src="{{asset('frontend/assets/img/icon/eStore.svg')}}" class="img-fluid w-100" alt="eStore"
                                            title="eStore" />
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="text-decoration-none d-lg-flex  d-none align-items-center" role="link">
                                        <i class="ri-shopping-cart-2-line pe-2"></i>e-Store
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    
                                    @if(Auth::check())
                                    <a href="{{route('dashboard')}}"
                                    class="text-decoration-none text-white d-lg-flex  d-none align-items-center"
                                    role="link">
                                    <i class="ri-logout-box-r-line pe-2"></i>Dashboard
                                    <a href="login.html"
                                        class="text-decoration-none text-white d-lg-none  d-block align-items-center"
                                        role="link">
                                        <img src="{{asset('frontend/assets/img/user.png')}}" class="img-fluid w-100" alt="login"
                                            title="login" />
                                    </a>
                                </a>
                                    @else
                                    <a href="{{route('login')}}"
                                        class="text-decoration-none text-white d-lg-flex  d-none align-items-center"
                                        role="link">
                                        <i class="ri-logout-box-r-line pe-2"></i>Login
                                    </a>
                                    <a href="{{route('login')}}"
                                        class="text-decoration-none text-white d-lg-none  d-block align-items-center"
                                        role="link">
                                        <img src="{{asset('frontend/assets/img/icon/login.svg')}}" class="img-fluid w-100" alt="login"
                                            title="login" />
                                    </a>
                                    @endif 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- navbar end -->

        {{ $slot }}
     

         <!-- footer start -->
    <footer class="foo-div position-relative pt-70 pb-md-5">
        <div class="container d-none ">
            <div class="row  align-items-md-center pb-md-5">
                <div class="col-lg-12 col-xl-12">
                    <div class="foo-newsletter text-center">
                        <h6 class="">Newsletter</h6>
                        <span>
                            Welcome to our newsletter! Stay connected and up-to-date with the latest news,
                            updates,<br />
                            and special offers by subscribing to our newsletter.
                        </span>
                    </div>
                    <div class="foo-newsletter-box d-flex align-items-center">
                        <input type="text" class="form-control" id="foo-email" placeholder="Enter Email Here..." />
                        <input type="button" class="btn btn-newsletter" id="newsletter-btn" value="Subscribe" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-md-2">
            <div class="row border-0">
                <div class="col-lg-5 col-xl-5">
                    <div class="foo-abt-div">
                        <div class="foo-abt-logo mb-md-2">
                            <h1><span>Indo</span>Tradex</h1>
                        </div>
                        <p class="pe-md-5">{{ $setting->about_footer }}.</p>
                    </div>
                    <div class="foo-soc-div mb-lg-1 mb-md-5">
                        <ul class="list-unstyled d-flex align-items-center justify-content-start">
                            <li>
                                <a href="{{ $setting->facebook }}" target="_black" class="text-decoration-none" role="link">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $setting->twiter }}"  target="_black" class="text-decoration-none" role="link">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $setting->linkedin }}"  target="_black"  class="text-decoration-none" role="link">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7">
                    <div class="d-flex flex-wrap justify-content-lg-around justify-content-between">
                        <div class="foo-lst-div">
                            <h5 class="foo-tit-div mb-md-3">Quick Links</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{route('/')}}" class="text-decoration-none" role="link">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}" class="text-decoration-none" role="link">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('our-team')}}" class="text-decoration-none" role="link">
                                        Team
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('register')}}" class="text-decoration-none" role="link">
                                        Register
                                    </a>
                                <li>
                                    <a href="{{route('contact')}}" class="text-decoration-none" role="link">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="foo-lst-div">
                            <h5 class="foo-tit-div mb-md-3">Products</h5>
                            <ul class="list-unstyled">
                                @foreach (App\Models\TradingCategory::active()->where('category_id', NULL)->get() as $list)
                                <li>
                                    <a href="{{route('product',[$list->slug]) }}" class="text-decoration-none" role="link">
                                      {{  $list->name }}
                                    </a>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="foo-lst-div">
                            <h5 class="foo-tit-div mb-md-3">Services</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        Term & Condition
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        Disclaimer
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        Payment
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12">
                    <div class="foo-soc-div mb-0">
                        <h3 class="foo-counter mt-md-4 mt-3 me-md-5">
                            <span class="d-block">Visitor's Counter</span>
                            <strong id="visitor-count" > </strong>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright position-relative py-md-3 py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6 col-12 col-sm-6 col-md-6">
                    <div class="foo-div-copy d-flex align-items-center justify-content-between">
                        <span> {{ $setting->copyright }}</span>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6  col-12 col-sm-6 col-md-6 text-end">
                    <span>
                        Powered By <a href="https://aspireindia.com/" class="text-decoration-none" role="link">
                            Aspire
                            Innovations
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->



 @include('frontend/inc/models')

 <script>
    $(document).ready(function () {
     
     $.ajax({
         type: 'get',
         url: '{{ route("visitor_counter") }}',
         data: {
             _token: '{{ csrf_token() }}'
         },
         success: function (response) {
             $('#visitor-count').text(response.count);
         }
     });

});
 </script>
    </body>
</html>

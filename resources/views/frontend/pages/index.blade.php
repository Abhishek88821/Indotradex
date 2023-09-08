<x-guest-layout>
    <!-- slider start -->
    <section class="sli-div position-relative">
        <!-- slider img start -->
        
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
            data-bs-interval="false">
           
            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                <div class="carousel-item @if( $key == 0 ) active @else '' @endif">
                    <img src="{{asset( $slider->images->filepath )}}"
                        class="d-block w-100" alt="{{ $slider->images->file_original_name }}">
                </div>
                @endforeach
            </div>
           
            <button class="carousel-control-prev d-none" type="button"
                data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next  d-none" type="button"
                data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>
        <!-- slider img end -->

    </section>
    <!-- slider end -->
    <!-- product link start -->
    <section class="pro-lnk position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="pro-link-lst">
                        <div class="owl-carousel owl-theme" id="pro-link-div">
                            @foreach($tradingCategory as $list)
                            <div class="item">
                                <div class="pro-link-box">
                                    <a href="{{route('product',[$list->slug])}}" class="text-decoration-none" role="link">
                                        <div class="pro-link-img">
                                            <img src="{{asset( $list->images->filepath )}}" class="img-fluid w-100" alt="{{ $list->images->file_original_name}}"
                                                title="{{ $list->name }}" />
                                        </div>
                                        <span>{{ $list->name }} </span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product link end -->
    <!-- tab start -->
    <section class="tab-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="tabs-lnk mb-lg-5 mb-0">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0" id="tabs-lnk">
                            @foreach($category as $key => $categoryItem)
                            <li>
                                <a href="#{{$categoryItem->slug}}" class=" @if($key == 0 )active @endif text-decoration-none">{{ $categoryItem->name }}</a>
                            </li>
                            @endforeach
                           
                        </ul>
                    </div>
                </div>
            </div>
            @foreach($category as $key=>$categoryItem)
            <div class="row py-md-5 align-items-center" id="{{$categoryItem->slug}}">
              
                <div class="col-lg-6 col-xl-6 {{ $loop->iteration % 2 == 0 ? 'order-lg-2 order-xl-2' : ''}}">
                    <div class="tab-div-img position-relative">
                        <img src="{{$categoryItem->images->filepath}}"
                            class="img-fluid w-100" alt="{{$categoryItem->images->file_original_name}}" title="{{$categoryItem->name}}" />
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="tab-div-cnt">
                        <div class="tab-title position-relative ">
                            <h3><span class="">{{ $loop->iteration }}</span>{{$categoryItem->name }}</h3>
                        </div>
                        <div class="tab-div-cnt-desc">
                            <p class="mt-md-4 mt-1">
                                {{$categoryItem->short_desc }}
                            </p>
                        </div>
                        <a href="{{$categoryItem->slug }}" class="text-decoration-none btn btn-link" role="link">Explore<i
                                class="ri-arrow-right-up-line  ms-md-2 ms-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </section>
    <!-- tab end -->
    <!-- about start -->
    <section class="abt-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 col-sm-12">
                    <div class="abt-div-img position-relative">
                        @foreach(explode(',', $about->images) as $imageId ) 
                            @php
                            $upload = App\Models\Upload::find($imageId);
                            @endphp
                        <img src="{{asset($upload->filepath )}}" class=" {{ $loop->iteration % 2 == 0 ? 'position-absolute' : ''}}" alt="{{ $upload->file_original_name}}" title="{{ $about->title }}" />
                        @endforeach
                        {{-- <img src="{{asset('frontend/assets/img/abt2.jpg')}}" class="" alt="" title="" />
                        <img src="{{asset('frontend/assets/img/abt3.jpg')}}" class="position-absolute" alt="" title="" /> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6  col-12 col-sm-12">
                    <div class="abt-title">
                        <p class="mb-2">About</p>
                        <h2 class="text-white"> {{ $about->title}}</h2>
                    </div>
                    <div class="abt-cnt">
                        <p class="pt-md-4">
                          {{$about->description}}
                        </p>
                        <a href="{{route('about')}}" class="text-decoration-none btn btn-link mt-md-5" role="link">Explore<i
                            class="ri-arrow-right-up-line ms-md-2 ms-1" ></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->
    <!-- trading start -->
    @if(isset($products) && count($products) > 0)
    <section class="tra-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="title">
                        <h2>Trading Products</h2>
                        <span>Portal for Supplier, Buyer, Agent & Consultant</span>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12">
                    <div class="tra-div-box mt-md-5">
                        <div class="owl-carousel owl-theme" id="tra-div-box">
                            @foreach($products as $Items)
                            <div class="item">
                                <div class="tra-pro-div">
                                    <div class="tra-pro-img position-relative">
                                        <img src="{{asset( $Items->images->filepath )}}" class="img-fluid w-100" alt="" title="" />
                                        <div class="intereseted position-absolute">
                                            <span class="so" title="Sourcing Enquiry" data-bs-toggle="modal" data-bs-target="#sourcingGET"  >
                                                SO
                                            </span>
                                            <span class="bu" title="Buy Enquiry" data-bs-target="#availableGET" data-bs-toggle="modal"  >
                                                BU
                                            </span>

                                        </div>
                                        <div class="explore-more-bnt">
                                            <a href="{{route('productDetails',[$Items->slug])}}" class="text-decoration-none">
                                                <span><i class="ri-arrow-right-up-line"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tra-pro-cnt">
                                        <span>{{$Items->categorys->name }}</span>
                                        <h4>{{ $Items->name }}</h4>
                                        <p>{{ $Items->description }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- trading end -->
    <!-- trending start -->
    @if(isset($projects) && count($projects) > 0)
    <section class="tre-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="title">
                        <h2 class="text-white">Trending Projects</h2>
                        <span class="text-white">Portals for Investors, Project Owners, Agents & Consulants</span>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12">
                    <div class="tre-div-box mt-md-5 mt-4">
                        <div class="owl-carousel owl-theme" id="tre-div-box">
                            @foreach($projects as $list)
                            <div class="item">
                                <div class="tra-pro-div">
                                    <div class="tra-pro-img position-relative">
                                        <img src="{{ $list->images->filepath}}"
                                            class="img-fluid w-100" alt="{{ $list->images->file_original_name}}" title="{{ $list->name }}" />

                                        <div class="explore-more-bnt">
                                            <a href="{{ route('project',[$list->slug ])}}" class="text-decoration-none">
                                                <span><i class="ri-arrow-right-up-line"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tra-pro-cnt">
                                        <h4>{{ $list->name }}</h4>
                                        <p>{{ $list->description }}</p>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- trending end -->
    <!-- business start -->
    @if(isset($business) && count($business) > 0)
    <section class="bus-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="title text-md-center text-start">
                        <h2>Business Supports</h2>
                        <span>
                            Portal for Individuals, Companies interested or trying to establish business in
                            indonesia
                        </span>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12">
                    <div class="bus-div-box mt-md-5 mt-3">
                        <div class="owl-carousel owl-theme" id="bus-div-box">
                            @foreach ($business as $list)
                            <div class="item">
                                <div class="bus-pro-div position-relative">
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        <div class="bus-pro-cnt">
                                            <h5>{{ $list->short_desc }}<span>{{ $list->name }}</span></h5>
                                        </div>
                                        <div class="tra-pro-img position-relative">
                                            <img src="{{asset( $list->images->filepath)}}" class="img-fluid w-100" alt="{{$list->images->file_original_name}}"
                                                title="{{ $list->name }}" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- business end -->
</x-guest-layout>
<x-guest-layout>
    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
            data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="object-position: top!important;"
                        src="{{ asset($tradingCategory->banners?->filepath ?? 'uploads/1hxD9JQ6vg7yEOItIe4A.jpeg')}}"
                        class="d-block w-100" alt="{{$tradingCategory->banners?->file_original_name ?? ''}}">
                </div>
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
         <div class="text-center m-2 h4"> {{ $tradingCategory->name }}</div>
        <!-- slider img end -->
    </section>
    <!-- slider end -->
    <!-- agro start -->
    <section class="agro-div position-relative py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="title text-center d-none">
                        <h3>Agro Products</h3>
                        <div class="breadcrumbs text-center">
                            <a href="{{route('/')}}" class="text-decoration-none" role="link">
                                Home
                            </a><a href="#" class="text-decoration-none" role="link">Agro Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-sm-12 col-12">
                    <div class="agro-div-filter-mobile d-md-none d-block" id="agro-div-filter-mobile">
                        <img src="assets/img/icon/filter.svg" class="img-fluid me-1" alt="Filter" title="Filter" />
                        <span>Filter</span>
                    </div>
                    <div class="agro-div-box filter-div">
                        <div class="agro-div-lst">
                            <h3 class="py-md-4">Filter</h3>
                            <span class="filter-close d-md-none d-block">
                                <img src="assets/img/icon/close.svg" class="img-fluid w-100" alt="Close Icon"
                                    Title="Close" />
                            </span>
                        </div>
                        <div class="agro-div-lst py-3">
                            <h5>Activity</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">To Supply</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">To Buy</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        To
                                        Sourcing
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="agro-div-lst py-3  border-0">
                          <span> Categories</span>
                            <ul class="list-unstyled border-0">
                                <li>
                                   @include('frontend/inc/productSidebar',['category' => $category , 'tradingCategory'=> $tradingCategory ])
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-8 col-xl-8 col-sm-12 col-12">
                    <div class="row p-0" id="filter-product-div">
                        @forelse($products as $list)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="tra-pro-div mx-0 mb-md-5 mb-4">
                                <div class="tra-pro-img position-relative">
                                    <img src="{{ asset($list->images->filepath) }}" class="img-fluid w-100" alt="{{ $list->images->file_original_name }}" title="{{ $list->name }}" />
                                    <div class="intereseted position-absolute">

                                        <span class="bu" title="Buy Enquiry" data-bs-toggle="modal"
                                            data-bs-target="#sourcingGET">
                                            BU
                                        </span>

                                    </div>
                                    <div class="explore-more-bnt">
                                        <a href="{{route('productDetails',[$list->slug ])}}" class="text-decoration-none">
                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tra-pro-cnt">
                                    <h4>{{ $list->name }}</h4>
                                    <p>{{ $list->shot_desc }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <h2> Products Not Found !!!</h2>
                    @endforelse
                      
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!-- agro end -->
</x-guest-layout>
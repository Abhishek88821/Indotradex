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
        <!-- slider img end -->
    </section>
    <!-- slider end -->
    <!-- breadcrumbs start -->
    <section class="breadcrumbs-div d-md-none d-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-12 col-12  ">
                 
    <div class="breadcrumbs text-start py-2 d-flex align-items-center jusify-content-start">
                            <a href="{{route('/')}}" class="text-decoration-none" role="link">
                                Home
                            </a>
                            <i class="ri-arrow-right-line"></i>
                            <a href="#" class="text-decoration-none" role="link">{{ $tradingCategory->name }}</a>
                        </div>
            </div>
        </div>
    </div>
</section>
    <!-- breadcrumbs end -->
    <!-- agro start -->
    <section class="agro-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
               
                    <div class="title text-start">
                    <h2 class="mb-20" >{{ $tradingCategory->name }}</h2>
                    <div class="inn-pro-div-cnt">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-xl-4 col-sm-12 col-12">
                    <div class="agro-div-filter-mobile d-md-none d-block" id="agro-div-filter-mobile">
                        <img src="{{asset('frontend/assets/img/icon/filter.svg')}}" class="img-fluid me-1" alt="Filter" title="Filter" />
                        <span>Filter</span>
                    </div>
                    <div class="agro-div-box filter-div">
                        <div class="agro-div-lst">
                            <h3 class="py-md-4">Filter</h3>
                            <span class="filter-close d-md-none d-block">
                                <img src="{{asset('frontend/assets/img/icon/close.svg')}}" class="img-fluid w-100" alt="Close Icon"
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
              
                <div class="col-lg-8 col-md-7 col-xl-8 col-sm-12 col-12">
                    <div class="row p-0" id="filter-product-div">
                        @forelse($products as $list)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="tra-pro-div mx-0 mb-md-5 mb-4">
                                <div class="tra-pro-img position-relative">
                                    <img src="{{ asset($list->images->filepath) }}" class="img-fluid w-100" alt="{{ $list->images->file_original_name }}" title="{{ $list->name }}" />
                                    <div class="intereseted position-absolute">

                                        <span class="so" title="Sourcing Enquiry" data-bs-toggle="modal" 
                                        data-bs-target="{{ getModalTarget('#ProductSupplierEnquiry') }}" data-product="{{$list}}">
                                        SO
                                    </span>

                                    <span class="bu" title="Buying Enquiry" data-product="{{$list}}" data-bs-target="{{ getModalTarget('#ProductBuyingEnquiry') }}" data-bs-toggle="modal"  >
                                        BU
                                    </span>
                                    <span class="su" title="Supplying Enquiry" data-bs-toggle="modal" 
                                    data-bs-target="{{ getModalTarget('#ProductSourcingEnquiry') }}" data-product="{{$list}}">
                                    SU
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
                        <h2 class="product-not-found" > Products Not Found !!!</h2>
                    @endforelse
                      
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!-- agro end -->
</x-guest-layout>
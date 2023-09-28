<x-guest-layout>
    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
            data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">  <img src="{{ asset($category->banners->filepath )}}" alt="{{$category->banners->file_original_name }}"
                        class="d-block w-100" />
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
    <!-- tranding about start -->
    <section class="tra-abt-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="tra-abt-div-box">
                        <div class="title">
                            <h2 class="mb-20" >{{$category->name }}</h2>
                        </div>
                        <p class="pt-md-4">
                           {{ $category->short_desc }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tranding about end -->
    <!-- tranding product start -->
    <section class="tra-pro-div1 position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="tra-pro-div-filter">
                        <p class="mb-2 d-block">Filter</p>
                        <div class="d-flex align-items-center">
                            <select class="me-md-2 me-2">
                                <option value="agro">Select Activity</option>
                                <option value="mining">To Supply</option>
                                <option value="metal">To Buy</option>
                                <option value="sea">For Sourcing</option>
                            </select>
                            <select class="">
                                <option value="" selected disabled >Select Type</option>
                                @foreach($tradingCategories as $categoryselect)
                                <option value="{{ $categoryselect->slug }}">{{ $categoryselect->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- agro start -->
               
                @foreach ($tradingCategories as $item)
                @php 
                $products = App\Models\Product::whereJsonContains('category_id',strval($item->id))->get();
                 @endphp 
                 @if($products->isNotEmpty())
                <div class="col-xl-12 col-lg-12">
                    <div class="tra-div-box mt-md-5 mb-md-5">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="title d-flex align-items-center px-md-2 justify-content-between">
                                    <h5 class="position-relative mb-0 @if($loop->iteration == 1) text-white @else text-black @endif"><span>{{ $loop->iteration  }}</span>{{$item->name }}</h5>
                                    <a href="{{route('product',[ $item->slug ])}}" class="btn-link red mt-0 text-decoration-none"
                                        role="link">Explore <i class="ri-arrow-right-up-line ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="tra-div-box mt-md-4 pb-md-5 ">
                                    <div class="owl-carousel owl-theme" id="agro-div-box">
                                        @foreach($products as $product)
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{ $product->images->filepath }}" class="img-fluid w-100" alt="{{ $product->images->file_original_name }}"
                                                        title="{{ $product->name }}" />
                                                    <div class="intereseted position-absolute">
                                                        <span class="so" title="Sourcing Enquiry" data-bs-toggle="modal" 
                                                        data-bs-target="{{ getModalTarget('#ProductSupplierEnquiry') }}" data-product="{{$product}}">
                                                        SO
                                                    </span>
    
                                                    <span class="bu" title="Buying Enquiry" data-product="{{$product}}" data-bs-target="{{ getModalTarget('#ProductBuyingEnquiry') }}" data-bs-toggle="modal"  >
                                                        BU
                                                    </span>
                                                    <span class="su" title="Supplier Enquiry" data-bs-toggle="modal" 
                                                    data-bs-target="{{ getModalTarget('#ProductSourcingEnquiry') }}" data-product="{{$product}}">
                                                    SU
                                                    </span> 

                                                    </div>
                                                    <div class="explore-more-bnt">
                                                        <a href="{{route('productDetails',[$product->slug])}}" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    {{-- <span>{{ $product->categorys?->name}}</span> --}}
                                                    <h4>{{ $product->name }}</h4>
                                                    <p> {{ $product->shot_desc ?? ' ' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- tranding product end -->
  


     <!-- modal sourcing start -->
     <div class="modal fade" id="sourcingGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Sourcing Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Product Name <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pre_business" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="registerby">
                                    Quantity <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pre_business" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    Remark/Comment<span>*</span>
                                </label>
                                <textarea type="text" class="form-control" name="address" id="message" rows="3" cols="3"></textarea>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="register-lnk position-relative d-flex align-items-center">
                                <input type="button" class="btn-link mt-md-0 me-md-0 mb-0 text-decoration-none" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal sourcing end -->

    
     <!-- modal supplying start -->
     <div class="modal fade" id="supplyGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Supplying Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Product Name <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pre_business" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="registerby">
                                    Quantity <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pre_business" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    Remark/Comment<span>*</span>
                                </label>
                                <textarea type="text" class="form-control" name="address" id="message" rows="3" cols="3"></textarea>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="register-lnk position-relative d-flex align-items-center">
                                <input type="button" class="btn-link mt-md-0 mb-0 me-md-0 text-decoration-none" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal supply end -->

    
     <!-- modal buy start -->
     <div class="modal fade" id="buyGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Buying Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Product Name <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pre_business" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="registerby">
                                    Quantity <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pre_business" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    Remark/Comment<span>*</span>
                                </label>
                                <textarea type="text" class="form-control" name="address" id="message" rows="3" cols="3"></textarea>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="register-lnk position-relative d-flex align-items-center">
                                <input type="button" class="btn-link mt-md-0 mb-0 me-md-0 text-decoration-none" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal buy end -->
</x-guest-layout>
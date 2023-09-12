<x-guest-layout>
    <!-- agro start -->
    <section class="agro-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12  col-12 col-sm-12 col-md-12">
                    <div class="title text-center d-none">
                        <h3>Products Details</h3>
                        <div class="breadcrumbs text-center">
                            <a href="{{ route('/')}}" class="text-decoration-none" role="link">
                                Home
                            </a><a href="#" class="text-decoration-none" role="link">Products Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-12 col-sm-12 col-md-12">
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
                           <span>Categories</span>
                            <ul class="list-unstyled border-0">
                                <li>
                                    @include('frontend/inc/productSidebar',['category' => $category ])
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8  col-12 col-sm-12 col-md-12">
                    <div class="agro-dtl-div">
                        <div class="agro-dtl-img">
                            <img src="{{asset($product->images->filepath )}}" class="img-fluid w-100" alt="{{ $product->images->file_original_name }}" />
                        </div>
                        <div class="agro-dtl-div-cnt">
                            <h4 class="mt-md-4 mb-md-3">{{ $product->name }}</h4>
                            <p>{{ $product->description }} </p>
                        </div>
                        <div class="agro-dtl-cnt-table  mt-md-4">
                            <h5 class="mb-md-3">
                                Specifications
                            </h5>
                            <table class="agro-dtl-cnt-table table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th>SPECIFICATION</th>
                                        <th>VALUE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(json_decode($product->specifications) as $key => $value)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $value }}</td>
                                    </tr>
                                @endforeach
                                  
                                    <tr>
                                        <td>Picture</td>
                                        <td><img src="{{ asset($product->icons->filepath)}}" class="table-img" alt="{{$product->icons->file_original_name }}" title="{{$product->name }}" style="height:100px" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        <div class="trending-div-link d-flex mt-md-5 me-2 align-items-center justify-content-around">
                            <div data-bs-toggle="modal" data-bs-target="#availableGET" class="trending-div-link-2 green">
                                <a href="javascript:void(0)" class="text-decoration-none" role="link">Interested To Buy</a>
                                <p>(For Buyer)</p>
                            </div>
                            <div data-bs-toggle="modal" data-bs-target="#investmentGET" class="trending-div-link-1  ms-2 orange">
                                <a href="javascript:void(0)" class="text-decoration-none" role="link">Intested To Supply</a>
                                <p>(For Suppliers)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12">
       
                   
                    <!-- related product start -->
                    <div class="related-product mt-md-5 mt-5">
                        <div class="title  mt-md-5 mt-5">
                            <h6 class="">Related Product</h6>
                        </div>
                        <div class="tre-div-box mt-md-5">
                            <div class="owl-carousel owl-theme" id="rel-div-box">
                                @foreach($relatedProducts as $list)
                                <div class="item">
                                    <div class="tra-pro-div">
                                        <div class="tra-pro-img position-relative">
                                            <img src="{{ asset($list->images?->filepath ?? '') }}"
                                                 class="img-fluid w-100" alt="{{$list->images?->file_original_name ?? '' }}" title="{{ $list->name }}" />
                                                 <div class="intereseted position-absolute">
                                                    <span class="so" title="Sourcing Enquiry" data-bs-toggle="modal" data-bs-target="#sourcingGET" >
                                                        SO
                                                    </span>
                                                    <span class="bu" title="Buy Enquiry" data-bs-target="#availableGET" data-bs-toggle="modal" >
                                                        BU
                                                    </span>

                                                </div>
                                                <div class="explore-more-bnt">
                                                    <a href="{{route('productDetails',[$list->slug])}}" class="text-decoration-none">
                                                        <span><i class="ri-arrow-right-up-line"></i></span>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="tra-pro-cnt">
                                            <h4>{{ $list->name }}</h4>
                                            <p>{{ $list->shot_desc}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                 
                    <!-- related product end -->
                </div>
            </div>
        </div>
    </section>
    <!-- agro end -->
   

    
    <!-- modal investment start -->
    <div class="modal fade" id="investmentGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header orange">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Supplier Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Product Name<span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Size<span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Quantity <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Quality <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
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
                                <input type="button"  class="btn-link mt-md-0 me-md-0 orange text-decoration-none" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal investment end -->
    <!-- modal available start -->
    <div class="modal fade" id="availableGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header green">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Buyier Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Product Name<span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Size<span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Quantity <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Quality <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
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
                                <input type="button" class="btn-link mt-md-0 me-md-0 text-decoration-none green" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal available end -->

    
      <!-- modal available start -->
      <div class="modal fade" id="sourcingGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"  style="background: #7139d3!important;" >
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Sourcing Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Product Name<span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Size<span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Quantity <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Quality <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
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
                                <input type="button" class="btn-link mt-md-0 me-md-0 text-decoration-none" style="background: #7139d3!important;" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal available end -->

</x-guest-layout>
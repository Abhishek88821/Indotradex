<x-guest-layout>
    <!-- login start -->
    <section class="profile-div position-relative py-70">
        <div class="container">
            <div class="row mx-0">
                <div class="col-xl-3 col-lg-3 p-md-0">
                    <div class="profile-menu position-relative d-block d-md-none" >
                        <img src="{{asset('frontend/assets/img/icon/menu.svg')}}" class="img-fluid me-2" alt="Menu Icon" title="Menu"><span>Menu</span>
                    </div>
                    @include('frontend.inc.sidebar')
                </div>
                <div class="col-xl-9 col-lg-9 col-12 col-sm-12 p-md-0 ">
                    <div class="pro-div-box">
                        <div class="pro-div-box-title position-relative">
                            <div class="">
                                <h2>Dashboard</h2>
                            </div>
                            <div
                                class="profile-div-avatar d-flex align-items-center justify-content-end position-relative">
                                <div class="profile-search d-flex align-items-center ">
                                    <i class="ri-search-line"></i>
                                    <input type="text" class="form-control" placeholder="Search Here..." id="search" />
                                </div>
                            </div>
                        </div>
                        <div class="pro-div-cnt row">
                            <div class="col-xl-3 col-lg-4" >
                                <div class="das-div-box position-relative" role="button" >
                                    <h3>{{ $supply }}</h3>
                                    <span  >Supply</span>
                                    <p class="pb-0 mb-0" >in your cart</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4" >    
                                <div class="das-div-box position-relative" role="button" >
                                    <h3>{{$buy}}</h3>
                                    <span  >Buy</span>
                                    <p class="pb-0 mb-0" >in your cart</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4" >    
                                <div class="das-div-box position-relative" role="button" >
                                    <h3>{{ $resources}}</h3>
                                    <span  >Sourcing</span>
                                    <p class="pb-0 mb-0" >in your cart</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4" >
                                <div class="das-div-box position-relative" role="button" >
                                    <h3> {{ $inversment }}</h3>
                                    <span  >Investment</span>
                                    <p class="pb-0 mb-0" >in your cart</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12" >
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</x-guest-layout>
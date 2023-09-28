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
                    <div class="pro-div-box ">
                        <div class="pro-div-box-title position-relative">
                            <div class="">
                                <h2>Resource</h2>
                            </div>
                            <div
                                class="profile-div-avatar d-flex align-items-center justify-content-end position-relative">
                                <div class="profile-search d-flex align-items-center ">
                                    <i class="ri-search-line"></i>
                                    <input type="text" class="form-control" placeholder="Search Here..." id="search" />
                                </div>
                            </div>
                        </div>
                        <div class="res-div-cnt row">
                            @forelse ($resources as $item)
                            <div class="col-xl-4 col-lg-4" >
                                <a href="{{ $item->images->filepath }}" download >
                                <div class="res-div-box position-relative" role="button" >
                                    <i class="ri-download-2-line"></i>
                                    <span class="res-span"> {{ $item->title }} </span>
                                </div>
                            </a>
                            </div>
                            @empty                
                            <tr>
                                                    <div class="no-found" > No Resource Found </div>
                                                    </tr>
                                                   <script type="text/javascript"> 
                                                            $('.supply-div-box table').css('display', 'none');</script>
                         @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</x-guest-layout>
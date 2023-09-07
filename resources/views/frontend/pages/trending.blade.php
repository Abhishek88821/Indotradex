<x-guest-layout>
    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
             data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{  asset($category->images->filepath ?? '')}}" class="d-block w-100" alt="{{$category->images->file_original_name ?? ''}}">
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
                            <h2 class="mb-20" >{{ $category->name }}</h2>
                        </div>
                        <p class="pt-md-4">
                           {{ $category->short_desc}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tranding about end -->
    <!-- trending start  -->
    <section class="trending-div tra-pro-div1 position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="trending-div-search mx-auto d-flex position-relative align-items-center justify-content-center mt-md-4 mb-md-5">
                        <div class="trending-sel position-relative">
                            <select class="form-control" id="tre-sel-div">
                                <option selected disabled >Select Category</option>
                                @foreach($trending as $list)
                                <option value="{{ $list->slug }}">{{ $list->name }}</option>
                                @endforeach
                              
                            </select>
                        </div>
                        <div class="trending-search-bar d-flex align-items-center">
                            <input type="text" class="form-control" placeholder="Search Your Project" id="trending_search_input" />
                            <a href="javascript:void(0)" class="search-button text-decoration-none" role="button"> <i class="ri-search-line me-2"></i><span class="trending_search_input_lnk">Search</span> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="trending-box-product" >
                @forelse ($projects as $project)
                <div class="col-lg-6 col-md-6 col-xl-6 col-6 col-sm-6">
                    <div class="trending-div-box d-flex">
                        <div class="trending-div-img position-relative">
                            <span>1</span>
                            <img src="{{  $project->images->filepath ?? ''}}" class="img-fluid" alt="{{ $project->images->file_original_name ?? '' }}" title="{{ $project->name ?? '' }}" />
                            <div class="d-flex align-items-center trending-div-avtar ">
                                <div class="trending-div-icn me-2 me-md-3">
                                    <img src="https://tse1.mm.bing.net/th?id=OIP.4XUd_gpcHR_hE5GtS551YwHaNK&pid=Api&P=0&h=220" class="img-fluid w-100" alt="" title="" />
                                </div>
                                <span>Abhinav Verma</span>
                            </div>
                        </div>
                        <div class="trending-div-cnt position-relative">
                            <div class="trending-div-icn-box">
                                <div class="trending-box-h">
                                    <div class="trending-title">
                                        <h4>{{ $project->name }}</h4>
                                        <div class="trending-box-1-cnt" >
                                        <p>{{ $project->description }}</p>
                                        </div>
                                    </div>
                                    {{-- <div class="treding-div-invest">
                                        <h6>Features</h6>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <ul class="mb-0">
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>placeholder text commonly used in the graphic</p>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>

                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                                <a href="{{route('project',[$project->slug])}}" class="text-decoration-none" role="link">
                                    Explore<i class="ri-arrow-right-up-line ms-2"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <h5> No Project Found !! </h5>
                 @endforelse
                {{-- <div class="col-lg-6 col-md-6 col-xl-6 col-6 col-sm-6">
                    <div class="trending-div-box d-flex">
                        <div class="trending-div-img position-relative">
                            <span>2</span>
                            <img src="https://images.pexels.com/photos/33192/paddle-wheel-bucket-wheel-excavators-brown-coal-open-pit-mining.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid" alt="" title="" />
                            <div class="d-flex align-items-center trending-div-avtar ">
                                <div class="trending-div-icn me-2 me-md-3">
                                    <img src="https://i.pinimg.com/originals/76/5c/bd/765cbd8350bf9f51f0a913040849a4f4.jpg" class="img-fluid w-100" alt="" title="" />
                                </div>
                                <span>Abhishek Sharma</span>
                            </div>
                        </div>
                        <div class="trending-div-cnt position-relative">
                            <div class="trending-div-icn-box">
                                <div class="trending-box-h">

                                    <div class="trending-title">
                                        <h4>Excavation Projects</h4>
                                        <div class="trending-box-1-cnt" >
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            </div>   </div>
                                    <div class="treding-div-invest mb-md-3">
                                        <h6>Features</h6>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <ul class="mb-0">
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>placeholder text commonly used in the graphic</p>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>

                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href="trending-details.html" class="text-decoration-none" role="link">
                                    Explore<i class="ri-arrow-right-up-line ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-6 col-6 col-sm-6">
                    <div class="trending-div-box d-flex">
                        <div class="trending-div-img position-relative">
                            <span>3</span>
                            <img src="https://images.pexels.com/photos/60008/brown-coal-energy-garzweiler-bucket-wheel-excavators-60008.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid" alt="" title="" />
                            <div class="d-flex align-items-center trending-div-avtar ">
                                <div class="trending-div-icn me-2 me-md-3">
                                    <img src="https://images.pexels.com/photos/2777898/pexels-photo-2777898.jpeg" class="img-fluid w-100" alt="" title="" />
                                </div>
                                <span>Leena Sharma</span>
                            </div>
                        </div>
                        <div class="trending-div-cnt position-relative">
                            <div class="trending-div-icn-box">
                                <div class="trending-box-h">

                                    <div class="trending-title">
                                        <h4>Minig Excavation Projects</h4>
                                        <div class="trending-box-1-cnt" >
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            </div>    </div>
                                    <div class="treding-div-invest">
                                        <h6>Features</h6>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <ul class="mb-0">
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>placeholder text commonly used in the graphic</p>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>

                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href="trending-details.html" class="text-decoration-none" role="link">
                                    Explore<i class="ri-arrow-right-up-line ms-2"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-6 col-6 col-sm-6">
                    <div class="trending-div-box d-flex">
                        <div class="trending-div-img position-relative">
                            <span>4</span>
                            <img src="https://images.pexels.com/photos/2735970/pexels-photo-2735970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid" alt="" title="" />
                            <div class="d-flex align-items-center trending-div-avtar ">
                                <div class="trending-div-icn me-2 me-md-3">
                                    <img src="https://i.pinimg.com/originals/67/95/9d/67959d67c0aceb07acd3c67ff8b7bd89.jpg" class="img-fluid w-100" alt="" title="" />
                                </div>
                                <span>Prem Verma</span>
                            </div>
                        </div>
                        <div class="trending-div-cnt position-relative">
                            <div class="trending-div-icn-box">
                                <div class="trending-box-h">
                                    <div class="trending-title">
                                        <h4>Diamond Projects</h4>
                                        <div class="trending-box-1-cnt" >
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            </div>       </div>
                                    <div class="treding-div-invest mb-md-3">
                                        <h6>Features</h6>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <ul class="mb-0">
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>placeholder text commonly used in the graphic</p>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>

                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href="trending-details.html" class="text-decoration-none" role="link">
                                    Explore<i class="ri-arrow-right-up-line ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-6 col-6 col-sm-6">
                    <div class="trending-div-box d-flex">
                        <div class="trending-div-img position-relative">
                            <span>5</span>
                            <img src="https://images.pexels.com/photos/258347/pexels-photo-258347.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid" alt="" title="" />
                            <div class="d-flex align-items-center trending-div-avtar ">
                                <div class="trending-div-icn me-2 me-md-3">
                                    <img src="https://images.pexels.com/photos/2777898/pexels-photo-2777898.jpeg" class="img-fluid w-100" alt="" title="" />
                                </div>
                                <span>Sunil Murti</span>
                            </div>
                        </div>
                        <div class="trending-div-cnt position-relative">
                            <div class="trending-div-icn-box">
                                <div class="trending-box-h">
                                    <div class="trending-title">
                                        <h4>Train Projects</h4>
                                        <div class="trending-box-1-cnt" >
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            </div>     </div>
                                    <div class="treding-div-invest">
                                        <h6>Features</h6>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <ul class="mb-0">
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>placeholder text commonly used in the graphic</p>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>

                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href="trending-details.html" class="text-decoration-none" role="link">
                                    Explore<i class="ri-arrow-right-up-line ms-2"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-6 col-6 col-sm-6">
                    <div class="trending-div-box d-flex">
                        <div class="trending-div-img position-relative">
                            <span>6</span>
                            <img src="https://images.pexels.com/photos/4040588/pexels-photo-4040588.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid" alt="" title="" />
                            <div class="d-flex align-items-center trending-div-avtar ">
                                <div class="trending-div-icn me-2 me-md-3">
                                    <img src="https://tse1.mm.bing.net/th?id=OIP.4XUd_gpcHR_hE5GtS551YwHaNK&pid=Api&P=0&h=220" class="img-fluid w-100" alt="" title="" />
                                </div>
                                <span>Abhinav Verma</span>
                            </div>
                        </div>
                        <div class="trending-div-cnt position-relative">
                            <div class="trending-div-icn-box">
                                <div class="trending-box-h">
                                    <div class="trending-title">
                                        <h4>Magnesium Ore Projects</h4>
                                        <div class="trending-box-1-cnt" >
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            </div>      </div>
                                    <div class="treding-div-invest mb-md-3">
                                        <h6>Features</h6>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <ul class="mb-0">
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>placeholder text commonly used in the graphic</p>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>

                                                <li class="d-flex align-items-start">
                                                    <i class="ri-checkbox-circle-line"></i><p>Lorem ipsum is placeholder.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href="trending-details.html" class="text-decoration-none" role="link">
                                    Explore<i class="ri-arrow-right-up-line ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- trending end -->
</x-guest-layout>
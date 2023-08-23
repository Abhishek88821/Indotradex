<x-guest-layout>

    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
             data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/4256976/pexels-photo-4256976.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="...">
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
                            <h2>Trading Products</h2>
                        </div>
                        <p class="pt-md-4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                        <p>
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
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
                            <select class="me-md-2">
                                <option value="agro">Select Activity</option>
                                <option value="mining">To Supply</option>
                                <option value="metal">To Buy</option>
                                <option value="sea">For Sourcing</option>
                            </select>
                            <select class="" >
                                <option value="" >Select Type</option>
                                <option value="agro">Agro Product</option>
                                <option value="mining">Mining Product</option>
                                <option value="metal">Metal Product</option>
                                <option value="sea">Sea Product</option>
                                <option value="precious">Precious Items</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- agro start -->
                <div class="col-xl-12 col-lg-12">
                    <div class="tra-div-box mt-md-5 mb-md-5">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="title d-flex align-items-center px-md-2 justify-content-between">
                                    <h5 class="position-relative mb-0 text-white"><span>1</span>Agro Products</h5>
                                    <a href="product.html" class="btn-link red mt-0 text-decoration-none" role="link">Explore <i class="ri-arrow-right-up-line ms-2"></i></a>
                                </div>

                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="tra-div-box mt-md-4 pb-md-5 ">
                                    <div class="owl-carousel owl-theme" id="agro-div-box">
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/cashew1.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Agro</span>
                                                    <h4>Cashew Nuts</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/coal.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Mining</span>
                                                    <h4>Coals</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/metal.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Metal</span>
                                                    <h4>Metal Scrap</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/cashew1.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Agro</span>
                                                    <h4>Plantation</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/gems.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Mining</span>
                                                    <h4>Gems</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/clove.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Agro</span>
                                                    <h4>Clove</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- agro end -->
                <!-- agro start -->
                <div class="col-xl-12 col-lg-12">
                    <div class="tra-div-box mt-md-2 mb-md-5">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="title d-flex align-items-center px-md-2 justify-content-between">
                                    <h5 class="position-relative mb-0"><span>2</span> Mining Products</h5>
                                    <a href="javascript:void(0)" class="btn-link mt-0 text-decoration-none" role="link">Explore <i class="ri-arrow-right-up-line ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="tra-div-box mt-md-4 pb-md-5">
                                    <div class="owl-carousel owl-theme" id="mining-div-box">
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/cashew1.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Mining</span>
                                                    <h4>Cashew Nuts</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/coal.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Mining</span>
                                                    <h4>Coals</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/metal.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Mining</span>
                                                    <h4>Metal Scrap</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/cashew1.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Mining</span>
                                                    <h4>Plantation</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/gems.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Mining</span>
                                                    <h4>Gems</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/clove.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Mining</span>
                                                    <h4>Clove</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mining end -->
                <!-- agro start -->
                <div class="col-xl-12 col-lg-12">
                    <div class="tra-div-box mt-md-2 mb-md-5">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="title d-flex align-items-center px-md-2 justify-content-between">
                                    <h5 class="position-relative mb-0"><span>3</span>Metal Products</h5>
                                    <a href="javascript:void(0)" class="btn-link mt-0 text-decoration-none" role="link">Explore <i class="ri-arrow-right-up-line ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="tra-div-box mt-md-4  pb-md-5 ">
                                    <div class="owl-carousel owl-theme" id="agro-div-box">
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/cashew1.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Metal</span>
                                                    <h4>Cashew Nuts</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/coal.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Metal</span>
                                                    <h4>Coals</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/metal.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Metal</span>
                                                    <h4>Metal Scrap</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/cashew1.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Metal</span>
                                                    <h4>Plantation</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/gems.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Metal</span>
                                                    <h4>Gems</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/clove.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Metal</span>
                                                    <h4>Clove</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- metals end -->
                <!-- agro start -->
                <div class="col-xl-12 col-lg-12">
                    <div class="tra-div-box mt-md-2 mb-md-5">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="title d-flex align-items-center px-md-2 justify-content-between">
                                    <h5 class="position-relative mb-0"><span>4</span>Sea Products</h5>
                                    <a href="javascript:void(0)" class="btn-link mt-0 text-decoration-none" role="link">Explore <i class="ri-arrow-right-up-line ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="tra-div-box mt-md-4  pb-md-5 border-0">
                                    <div class="owl-carousel owl-theme" id="agro-div-box">
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/cashew1.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Sea</span>
                                                    <h4>Cashew Nuts</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/coal.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Sea</span>
                                                    <h4>Coals</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/metal.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Sea</span>
                                                    <h4>Metal Scrap</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="assets/img/cashew1.jpg" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Sea</span>
                                                    <h4>Plantation</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/gems.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Sea</span>
                                                    <h4>Gems</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tra-pro-div">
                                                <div class="tra-pro-img position-relative">
                                                    <img src="{{asset('frontend/assets/img/clove.jpg')}}" class="img-fluid w-100" alt="" title="" />
                                                    <span class="intereseted position-absolute"><i class="ri-heart-line"></i></span>
                                                    <div class="explore-more-bnt">
                                                        <a href="javascript:void(0)" class="text-decoration-none">
                                                            <span><i class="ri-arrow-right-up-line"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tra-pro-cnt">
                                                    <span>Sea</span>
                                                    <h4>Clove</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sea end -->
            </div>
        </div>
    </section>
    <!-- tranding product end -->


</x-guest-layout>
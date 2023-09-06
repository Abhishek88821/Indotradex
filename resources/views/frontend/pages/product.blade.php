<x-guest-layout>
    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
            data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="object-position: top!important;"
                        src="{{ asset($tradingCategory->banners->filepath )}}"
                        class="d-block w-100" alt="{{$tradingCategory->banners->file_original_name}}">
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
    <!-- agro start -->
    <section class="agro-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="title text-center d-none">
                        <h3>Agro Products</h3>
                        <div class="breadcrumbs text-center">
                            <a href="index.html" class="text-decoration-none" role="link">
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
                            <h5>Agro Products</h5>
                            <ul class="list-unstyled border-0">
                                <li>
                                    <div class="label">
                                        <input type="checkbox" class="form-control" name="product" /><span
                                            class="ms-2 label-div">Spices & Herbs</span>
                                    </div>
                                    <ul class="list-unstyled d-block">
                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Clove</a>
                                            <ul class="list-unstyled d-block">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Red Clove</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Black Clove</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Clove Stem</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Clove Oil</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Dried Clove Leaves</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                                Nut
                                                Meg
                                            </a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Nut Meg with Shell Quality1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Nut Meg with Shell Quality2</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">A Grade Nut Meg</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">B Grade Nut Meg</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">AB Grade Nut Meg</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Other Nut Meg Products</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Mace</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Mace Unsorted Red</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Mace Unsorted Orange</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Mace Sorted Red</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Mace Sorted Orange</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Cinnamon</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Cassia Loose</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Cassia Sized Sticks</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Cassia Long Sticks</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Pepper</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Black Pepper Quality1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Black Pepper Quality2</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">White Pepper Quality1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">White Pepper Quality2</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                                Long
                                                Pepper
                                            </a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Long Pepper Quality1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Long Pepper Quality2</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Cardamom</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Cardamom Jawa1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Cardamom Jawa2</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Cardamom India1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Cardamom India2</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <div class="label">
                                        <input type="checkbox" class="form-control" name="product" /><span
                                            class="ms-2  label-div">Dry Fruits & Nuts</span>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                                Raw
                                                Cashew Nuts
                                            </a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Cashew Nut</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Roasted Cashew Nut</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Coated Cashew Nut</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Cashew Nut Oil</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                                Candle
                                                Nuts
                                            </a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Candle Nuts White</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Candle Nut Yellowish</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Candle Nut Oil</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                                Kenari
                                                Nuts (Indonesian Almonds)
                                            </a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Activated Kenari Nut</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Roasted Kenari Nuts</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Honey Coated Kenari Nuts</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Kenari Nut Oil</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="label">
                                        <input type="checkbox" class="form-control" name="product" /><span
                                            class="ms-2  label-div">Plantation Products</span>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Coconut</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Virgin Coconut Oil</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Coconut Sugar Powder</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Coconut Sugar Cubes</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Copra Whole</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Copra Pieces White</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Copra Pieces Black</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Palm</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Palm Sugar Powder</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Palm Sugar Cubes</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <div class="label">
                                        <input type="checkbox" class="form-control" name="product" /><span
                                            class="ms-2  label-div">Charcoal and Briquettes</span>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Charcoal</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Briquettes</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Activated Carbon</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <div class="label">
                                        <input type="checkbox" class="form-control" name="product" /><span
                                            class="ms-2  label-div">Religious Products</span>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none"
                                                role="link">Rudraksh</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Rudraksh Grade1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Rudraksh Grade2</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        role="link">Rudraksh Grade3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                                Other
                                                Products
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8 col-sm-12 col-12">
                    <div class="row p-0" id="filter-product-div">
                        @foreach($products as $list)
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
                      @endforeach
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- agro end -->
</x-guest-layout>
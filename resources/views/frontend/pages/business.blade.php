<x-guest-layout>
    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
             data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="object-position: initial!important;" src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg" class="d-block w-100" alt="...">
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
    <!-- business start -->
    <section class="bus-abt-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 ">
                    <div class="tra-abt-div-box pb-md-3">
                        <div class="title">
                            <h2 class="mb-20" >Business Support</h2>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($business as $list)
            <div class="row my-md-5">
                <div class="col-lg-4 col-xl-4 {{ $loop->iteration % 2 == 0 ? 'order-2 order-md-1' : ''}}">
                    <div class="bus-div-img position-relative">
                        <span>{{ $loop->iteration }}</span>
                        <img src="{{ asset($list->images->filepath) }}" class="img-fluid" alt="{{ $list->images->file_original_name}}" title="{{ $list->name }}" />
                        <h4>{{ $list->name }}</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="bus-div-box-1 pe-md-4">
                        <p class="">
                            {{ $list->description }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            
            <div class="row mt-md-5 pt-md-5">
                <div class="col-xl-12 col-lg-12 text-center">
                    <button type="button" class="btn position-relative btn-primary business-btn-get" data-bs-toggle="modal" data-bs-target="#businessGET">
                        <span>Business Enquiry</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- business end -->
    <!-- modal start -->
    <!-- Modal -->
    <div class="modal fade" id="businessGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Business Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Type Of Support <span>*</span>
                                </label>
                                <select class="form-control" id="register_as">
                                    <option value="Investment">Investment</option>
                                    <option value="Consultant">Consultant</option>
                                    <option value="Travel">Travel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="cur_bus">
                                    Your Current Business<span>*</span>
                                </label>
                                <input type="text" class="form-control" name="cur_bus" id="cur_bus">
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
    <!-- modal end -->
</x-guest-layout>
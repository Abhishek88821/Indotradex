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
            <!-- @foreach ($business as $list)
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
            @endforeach -->

            <div class="row my-md-5">
                <div class="col-lg-4 col-xl-4 order-lg-1">
                    <div class="bus-div-img position-relative">
                        <span>1</span>
                        <img src="https://images.pexels.com/photos/716411/pexels-photo-716411.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=2" class="img-fluid" alt="" title="">
                        <h4>Establishment</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="bus-div-box-1 pe-md-4">
                        <p class="">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                        <p class="mb-0">
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-md-5">
                <div class="col-lg-4 col-xl-4">
                    <div class="bus-div-img position-relative">
                        <span>2</span>
                        <img src="https://images.pexels.com/photos/3943727/pexels-photo-3943727.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=2" class="img-fluid" alt="" title="">
                        <h4>Investment</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="bus-div-box-1">
                        <p class="">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                        <p class="mb-0">
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-md-5">
                <div class="col-lg-8 col-xl-8 order-2 order-md-2 order-lg-1">
                    <div class="bus-div-box-1">
                        <p class="">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                        <p class="mb-0">
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 order-md-1">
                    <div class="bus-div-img position-relative">
                        <span>3</span>
                        <img src="https://images.pexels.com/photos/17392394/pexels-photo-17392394/free-photo-of-young-woman-sitting-at-the-desk-with-a-laptop-and-talking-on-the-phone.jpeg" class="img-fluid" alt="" title="">
                        <h4>Procurement &amp; Sourcing</h4>
                    </div>
                </div>
            </div>

            
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
   
</x-guest-layout>
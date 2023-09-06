<x-guest-layout>
    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
             data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="object-position: 0!important;" src="https://images.pexels.com/photos/4256976/pexels-photo-4256976.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="...">
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
    <!-- about start -->
    <section class="bus-abt-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 ">
                    <div class="tra-abt-div-box pb-md-3">
                        <div class="title">
                            <h2 class="mb-20" >About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="bus-div-box-1">
                        <p class="">
                           {{ $about->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->
</x-guest-layout>
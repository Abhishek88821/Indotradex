<x-guest-layout>
    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
             data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="object-position: 0!important;" src="https://images.pexels.com/photos/8667538/pexels-photo-8667538.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="...">
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
    <!-- our team start -->
    <section class="bus-abt-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 ">
                    <div class="tra-abt-div-box pb-md-3">
                        <div class="title">
                            <h2>Our Team</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="team-div-box mt-md-5">
                        <div class="team-div">
                            <ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist">
                                @foreach($team as $key => $list)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link @if($key == 0)  active @endif " id="pills-home-tab-{{$list->id}}" data-bs-toggle="pill" data-bs-target="#pills-home-{{$list->id}}" type="button" role="tab" aria-controls="pills-home-{{$list->id}}" aria-selected="true">
                                        <div class="team-img position-relative">
                                            <div class="circle position-relative"  >
                                                <span></span>
                                            </div>
                                            <img src="{{ $list->images->filepath }}" class="img-fluid" alt="{{ $list->images->file_original_name }}" title="{{ $list->name }}" />
                                        </div>
                                    </button>
                                </li>
                                @endforeach
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                @foreach ($team as  $key => $item)
                                <div  class="tab-pane fade show  @if($key == 0)  active @endif " id="pills-home-{{$item->id}}" role="tabpanel" aria-labelledby="pills-home-tab-{{$item->id}}">
                                    <div class="tab-team mt-md-5" >
                                        <div class="team-title  my-md-4" >
                                            <h4>{{ $item->name}} <span> {{ $item->position}}</span></h4>
                                        </div>
                                        <div class="team-cnt">
                                            <p class="mb-0"> {{ $item->about }} .</p>
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
    </section>

    <!-- our team end -->
</x-guest-layout>
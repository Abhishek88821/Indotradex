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
                                {{-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        <div class="team-img position-relative">
                                            <div class="circle position-relative">
                                                <span></span>
                                            </div>
                                            <img src="https://acodez.in/facespa/images/p2.png" class="img-fluid" alt="our team" title="our team" />
                                        </div>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                        <div class="team-img position-relative">
                                            <div class="circle position-relative">
                                                <span></span>
                                            </div>

                                            <img src="https://acodez.in/facespa/images/p3.png" class="img-fluid" alt="our team" title="our team" />
                                        </div>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1" aria-selected="false">
                                        <div class="team-img position-relative">
                                            <div class="circle position-relative">
                                                <span></span>
                                            </div>
                                            <img src="https://acodez.in/facespa/images/p4.png" class="img-fluid" alt="our team" title="our team" />
                                        </div>
                                    </button>
                                </li> --}}
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                @foreach ($team as  $key => $item)
                                <div class="tab-pane fade show  @if($key == 0)  active @endif " id="pills-home-{{$item->id}}" role="tabpanel" aria-labelledby="pills-home-tab-{{$item->id}}">
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
                                {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="tab-team mt-md-5">
                                        <div class="team-title  my-md-4">
                                            <h4>Simran Kumar <span>Manager</span></h4>
                                        </div>
                                        <div class="team-cnt">
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="tab-team mt-md-5">
                                        <div class="team-title  my-md-4">
                                            <h4>Neha Kumar <span>Administrator</span></h4>
                                        </div>
                                        <div class="team-cnt">
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
                                    <div class="tab-team mt-md-5">
                                        <div class="team-title  my-md-4">
                                            <h4>Pankaj Kaushal <span>HR</span></h4>
                                        </div>
                                        <div class="team-cnt">
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our team end -->
</x-guest-layout>
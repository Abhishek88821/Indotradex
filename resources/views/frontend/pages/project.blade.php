<x-guest-layout>

    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
             data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset($trending->images->filepath ?? 'uploads/1hxD9JQ6vg7yEOItIe4A.jpeg') }}" class="d-block w-100" alt="{{$trending->images->file_original_name ?? ''}}">
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
    <!-- trending start  -->
    <section class="trending-div position-relative py-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="tra-abt-div-box">
                        <div class="title">
                            <h2 class="mb-20" >{{ $project->name }}</h2>
                        </div>
                        <p class="pt-md-4">
                            {{ $project->description }}
                        </p>
                    </div>
                    <div class="trending-div-table my-md-5 mt-5 ">
                        <div class="title">
                            <h6 class="mb-md-3">Project Features</h6>
                        </div>
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th>Quantity</th>
                                    <th>Quality</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(json_decode($project->features, true) as $item)
                                <tr>
                                    <td>{{ $item['key'] }}</td>
                                    <td>{{ $item['value'] }}</td>
                                </tr>
                            @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="trending-div-table my-md-5 mt-5">
                        <div class="title">
                            <h6 class="mb-md-3">Project Parameters</h6>
                        </div>
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th>Quantity</th>
                                    <th>Quality</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(json_decode($project->parameters, true) as $item)
                                <tr>
                                    <td>{{ $item['key'] }}</td>
                                    <td>{{ $item['value'] }}</td>
                                </tr>
                            @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="trending-div-table-1 p-0  my-md-5 mt-5">
                        <div class="title">
                            <h6 class="mb-md-3 mb-20">Project Resouces</h6>
                        </div>
                        <p class="mt-md-2">
                           {{ $project->resouces_about ?? ''}}
                        </p>
                    </div>

                </div>
                <div class="col-lg-9 col-xl-9">
                    <div class="trending-div-gallery d-flex align-items-center justify-content-between">
                        <div class="tre-div-gal-carousel owl-carousel owl-theme" id="tre-div-gal-carousel">
                          
                            @if(isset($project->resouces_images))
                            @php
                                $imageIds = json_decode($project->resouces_images) ?? explode(',', $project->resouces_images);
                            @endphp
                        
                            @if(is_array($imageIds))
                                @foreach($imageIds as $imageId)
                                    @php 
                                        $image = App\Models\Upload::find($imageId);
                                    @endphp
                                    <div class="item">
                                        <div class="trending-div-gal-1">
                                            <img src="{{ asset($image->filepath ?? '' ) }}" class="img-fluid w-100" alt="" title="" />
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <!-- Handle the case when $project->resouces_images is not a valid JSON array or comma-separated list -->
                            @endif
                        @else
                            <!-- Handle the case when $project->resouces_images is null or not set -->
                        @endif
                        
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3">
                    <a href="/{{$project->pdf->filepath }}" class="text-decoration-none position-relative trending-download my-3 my-md-0" role="link" download>
                        <i class="ri-download-2-line me-2 text-white position-absolute"></i>
                        <p class="mb-0 text-white position-relative">Download PDF</p>
                    </a>
                </div>
                <div class="col-lg-12 col-xl-12">
                    <div  class="trending-div-link d-flex flex-sm-nowrap flex-wrap mt-md-5 align-items-center justify-content-around">
                        <div data-bs-toggle="modal" data-bs-target="#investmentGET" class="trending-div-link-1">
                            <a href="javascript:void(0)" class="text-decoration-none" role="link">Investment Enquiry</a>
                            <p>(For Investor/Agent/Consultant)</p>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#availableGET" class="trending-div-link-2">
                            <a href="javascript:void(0)" class="text-decoration-none" role="link">Availablity Submission</a>
                            <p>(For Project Owners Having Resource/Available)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending end -->
    

    <!-- modal investment start -->
    <div class="modal fade" id="investmentGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Investor Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Project Interest Selection <span>*</span>
                                </label>
                                <select class="form-control" id="register_as">
                                    <option value="lead_ore">Lead Ore</option>
                                    <option value="magnesium_ore">Magnesium Ore</option>
                                    <option value="carbon">Carbon</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="registerby">
                                    Requirement <span>*</span>
                                </label>
                                <select class="form-control" id="register_as">
                                    <option value="info">Infomation</option>
                                    <option value="Clarification">Clarification</option>
                                    <option value="term_proceed">Terms To Proceed</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group  mb-md-4">
                                <label for="registerby">
                                    Present Business <span>*</span>
                                </label>
                               <input type="text" class="form-control" id="pre_business" />
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
                                <input type="button" class="btn-link mt-md-0 me-md-0 text-decoration-none" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal investment end -->
    <!-- modal available start -->
    <div class="modal fade" id="availableGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header red" style="background: var(--red);">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Project Owner Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Project Name <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="pro_name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Upload Photo <span>*</span>
                                </label>
                                <input type="file" id="uplaod_photo" class="form-control" />
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
                                <input type="button" style="background: var(--red);" class="btn-link mt-md-0 me-md-0 text-decoration-none" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
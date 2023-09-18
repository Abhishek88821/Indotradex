<x-guest-layout>
    <!-- login start -->
    <section class="profile-div position-relative py-70">
        <div class="container">
            <div class="row mx-0">
                <div class="col-xl-3 col-lg-3 p-md-0">
                    <div class="profile-menu position-relative d-block d-md-none" >
                        <img src="assets/img/icon/menu.svg" class="img-fluid me-2" alt="Menu Icon" title="Menu" /><span>Menu</span>
                    </div>
                    @include('frontend.inc.sidebar')
                </div>
                <div class="col-xl-9 col-lg-9 col-12 col-sm-12 p-md-0 ">
                    <div class="pro-div-box bg-white">
                        <div class="pro-div-box-title position-relative">
                            <div class="">
                                <h2>Visit</h2>
                            </div>
                            <div
                                class="profile-div-avatar d-flex align-items-center justify-content-end position-relative">
                                <div class="profile-search d-flex align-items-center ">
                                    <i class="ri-search-line"></i>
                                    <input type="text" class="form-control" placeholder="Search Here..." id="search" />
                                </div>
                            </div>
                        </div>
                        <div class="meeting-div-cnt row">
                            <div class="col-xl-12 col-sm-12 col-md-12 col-lg-12 col-12">
                                <form action="{{ route('visit.save') }}" method="post">
                                    @csrf <!-- Add the CSRF token for security -->
                                    <div class="meeting-div-box-cnt">
                                        <div class="meeting-div-box-cnt-title">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                                        role="tab" aria-controls="pills-home"
                                                        aria-selected="true">Tick</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-profile" type="button" role="tab"
                                                        aria-controls="pills-profile" aria-selected="false">Type</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <div class="visit-div-cnt">
                                                    <ul class="list-unstyled mb-md-5 mb-4 mt-md-5 mt-4">
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Hotel" />Hotel</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Investment" />Investment</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Business" />Business</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Airport" />Airport</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Play" />Play</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Support" />Support</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Car" />Car</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Sport" />Sport</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Tourism" />Tourism</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="checkbox" name="options[]" value="Sport" />Eduction</label>
                                                        </li>
                                                        <!-- Add more checkboxes as needed -->
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <div class="visit-textarea px-3 mx-auto">
                                                    <textarea name="comments" placeholder="Write Here ... " class="form-control" cols="4" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-link-visit mt-3 d-block mx-auto">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</x-guest-layout>



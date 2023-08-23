<x-guest-layout>
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
<!-- agro start -->
<section class="form-div position-relative py-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="register-form">
                    <div class="title mb-md-5">
                        <h2>Register Page</h2>
                    </div>
                    <div class="row p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="registerby">
                                    Register As
                                </label>
                                <select class="form-control" id="register_as">
                                    <option value="as_supplier">Supplier</option>
                                    <option value="buyer">Buyer</option>
                                    <option value="project_owner">Project Owner</option>
                                    <option value="investor">Investor</option>
                                    <option value="agent">Agent</option>
                                    <option value="consultant">Consultant</option>
                                    <option value="member">Member</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    First Name
                                </label>
                                <input type="text" class="form-control" name="first_name" id="first_name" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="last_name">
                                    Last Name
                                </label>
                                <input type="text" class="form-control" name="last_name" id="last_name" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    E-mail
                                </label>
                                <input type="text" class="form-control" name="first_name" id="first_name" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    Mobile
                                </label>
                                <div class="mobile-div d-flex align-items-center">
                                    <select class="form-control" id="mbl_code">
                                        <option value="+91"><img src="assets/img/india.png" class="img-fluid" alt="" title="" /><span>+91</span></option>
                                        <option value="+04"><img src="assets/img/indonesia.png" class="img-fluid" alt="" title="" /><span>+04</span></option>
                                    </select>
                                    <input type="text" class="form-control" name="mobile" id="mobile" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="website">
                                    Website
                                </label>
                                <input type="text" class="form-control" name="website" id="website" />
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    Address Name
                                </label>
                                <textarea type="text" class="form-control" name="address" id="message" rows="3" cols="3"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    City/Town
                                </label>
                                <input type="text" class="form-control" name="city" id="city" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="pin_code">
                                    Pin Code
                                </label>
                                <input type="text" class="form-control" name="pin_code" id="pin_code" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="photo_id">
                                    Upload Photo ID
                                </label>
                                <input type="file" class="form-control" name="photo_id" id="photo_id" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="photo">
                                    Upload Photo
                                </label>
                                <input type="file" class="form-control" name="photo" id="photo" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group  mb-md-4">
                                <label for="remark">
                                    Remark
                                </label>
                                <textarea type="text" class="form-control" name="remark" id="remark" rows="3" cols="3"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="register-lnk position-relative d-flex align-items-center">
                                <input type="button" class="btn-link mt-md-4 me-md-3 text-decoration-none" value="Submit" />
                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn-link red text-decoration-none mt-md-4" >Add Membership</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-guest-layout>
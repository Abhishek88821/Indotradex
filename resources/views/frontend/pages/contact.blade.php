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
<!-- agro start -->
<section class="form-div position-relative py-70">
    <div class="container">
        <div class="row mx-0">
            <div class="col-xl-7 col-lg-7">
                <div class="register-form">
                    <div class="title mb-md-5">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    Name<span>*</span>
                                </label>
                                <input type="text" class="form-control" name="first_name" id="first_name" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="org_nme">
                                    Organisation Name<span>*</span>
                                </label>
                                <input type="text" class="form-control" name="org_nme" id="org_nme" />
                            </div>
                        </div>


                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="category">
                                    Country<span>*</span>
                                </label>
                                <select class="form-control" id="category">
                                    <option value="india" style="background-image:url('assets/img/india.png');" >India</option>
                                    <option value="indonesia"><img src="assets/img/indonesia.png" class="img-fluid me-1" alt="" title="" /> Indonesia</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="state">
                                    State<span>*</span>
                                </label>
                                <input type="text" class="form-control" name="state" id="state" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="e_mail">
                                    E-mail<span>*</span>
                                </label>
                                <input type="text" class="form-control" name="e_mail" id="e_mail" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    Mobile<span>*</span>
                                </label>
                                <div class="mobile-div d-flex align-items-center">
                                    <select class="form-control" id="mbl_code">
                                        <option value="+91">+91</option>
                                        <option value="+04">+04</option>
                                    </select>
                                    <input type="text" class="form-control" name="mobile" id="mobile" />
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group mb-md-5 mt-md-4">
                                <div class="radio-form d-flex align-items-center">
                                    <div class="d-flex align-items-center me-md-4">
                                        <input type="radio" id="" name="Products" value="Products" />
                                        <label for="huey" class="ms-1 mb-0" >Products</label>
                                    </div>
                                    <div class="d-flex align-items-center me-md-4">
                                        <input type="radio" id="" name="Products" value="Products" />
                                        <label for="huey"  class="ms-1 mb-0" >Suppliers</label>
                                    </div>
                                    <div class="d-flex align-items-center me-md-4">
                                        <input type="radio" id="" name="Products" value="Products" />
                                        <label for="huey"  class="ms-1 mb-0" >External Manufacturing</label>
                                    </div>
                                    <div class="d-flex align-items-center me-md-4">
                                        <input type="radio" id="" name="Products" value="Products" />
                                        <label for="huey"  class="ms-1 mb-0" >Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group mb-md-4">
                                <label for="category">
                                    Product<span>*</span>
                                </label>
                                <input type="text" class="form-control" name="product" id="product" />
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group  mb-md-4">
                                <label for="first_name">
                                    Questions<span>*</span>
                                </label>
                                <textarea type="text" class="form-control" name="address" id="message" rows="3" cols="3"></textarea>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="register-lnk position-relative d-flex align-items-center">
                                <input type="button" class="btn-link mt-md-4 me-md-3 text-decoration-none" value="Submit" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-5">
                <div class="contact-addres-div">
                    <div class="accordion mx-md-4 mt-md-4" id="contact-addres-box">
                        <div class="accordion-item border-0  mb-md-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Corporate Office
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#contact-addres-box">
                                <div class="accordion-body">
                                    <h4>Indonesia</h4>
                                    <p>Jalan Rajawadi Palapa Telaga Jaya, Gorontalo - 96181</p>
                                    <p>Tel: +91 120034 12039</p>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">Location Map</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  border-0 mb-md-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Office
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#contact-addres-box">
                                <div class="accordion-body">
                                    <h4>India</h4>
                                    <p>Jalan Rajawadi Palapa Telaga Jaya, Gorontalo - 96181</p>
                                    <p>Tel: +91 120034 12039</p>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">Location Map</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- agro end -->

</x-guest-layout>
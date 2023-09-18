<x-guest-layout>
    <!-- slider start -->
    <section class="sli-div inn-div-slider position-relative">
        <!-- slider img start -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
            data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="object-position: 0!important;"
                        src="https://images.pexels.com/photos/8667538/pexels-photo-8667538.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        class="d-block w-100" alt="...">
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
                    <form action="{{route('contact.save')}}" method="post" id="contactForm">
                        @csrf
                    <div class="register-form mt-0">
                        <div class="title mb-md-5">
                            <h2 class="mb-20" >Contact Us</h2>
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
                                    <select class="form-control" id="category" name="category">
                                        <option value="india" style="background-image:url({{asset('frontend/assets/img/india.png')}});">
                                            India</option>
                                        <option value="indonesia"><img src="{{asset('frontend/assets/img/indonesia.png')}}"
                                                class="img-fluid me-1" alt="" title="" /> Indonesia</option>
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
                                        <input type="text" class="form-control" name="mobile" id="mobile" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group mb-md-5 mt-md-4">
                                    <div class="radio-form d-flex align-items-center"  >
                                        <div class="d-flex align-items-center me-md-4  me-3 mb-2 mb-md-0">
                                            <label class=" mb-0">
                                                <input type="radio" id="" name="Products" class="me-1"
                                                    value="Products" />
                                                Products</label>
                                        </div>
                                        <div class="d-flex align-items-center me-md-4 me-3 mb-2  mb-md-0">
                                            <label class=" mb-0">
                                            <input type="radio" id="" name="Products" class="me-1" value="Products" />Suppliers</label>
                                        </div>
                                        <div class="d-flex align-items-center me-md-4  me-3 mb-2  mb-md-0">
                                            <label class=" mb-0">
                                            <input type="radio" id="" name="Products" class="me-1" value="Products" />External Manufacturing</label>
                                        </div>
                                        <div class="d-flex align-items-center me-md-4  me-3 mb-2  mb-md-0">
                                            <label class=" mb-0">
                                            <input type="radio" id="" name="Products" class="me-1" value="Products" />Others</label>
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
                                        Message<span>*</span>
                                    </label>
                                    <textarea type="text" class="form-control" name="message" id="message" rows="3"
                                        cols="3"></textarea>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="register-lnk position-relative d-flex align-items-center">
                                    <input type="submit" class="btn-link mt-md-4 mb-0 me-md-3 text-decoration-none"
                                        value="Submit" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="response"></div>
                </div>
                <div class="col-lg-5 col-xl-5">
                    <div class="contact-addres-div">
                        <div class="accordion mx-md-4 mt-md-4" id="contact-addres-box">
                            <div class="accordion-item border-0  mb-md-4">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Corporate Office
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo" data-bs-parent="#contact-addres-box">
                                    <div class="accordion-body">
                                        <h4>Indonesia</h4>
                                        <p>Jalan Rajawadi Palapa Telaga Jaya, Gorontalo - 96181</p>
                                        <p>Tel: +91 120034 12039</p>
                                        <a href="javascript:void(0)" class="text-decoration-none" role="link">Location
                                            Map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  border-0 mb-md-4">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Office
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                    data-bs-parent="#contact-addres-box">
                                    <div class="accordion-body">
                                        <h4>India</h4>
                                        <p>Jalan Rajawadi Palapa Telaga Jaya, Gorontalo - 96181</p>
                                        <p>Tel: +91 120034 12039</p>
                                        <a href="javascript:void(0)" class="text-decoration-none" role="link">Location
                                            Map</a>
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


    

<script>
    $(document).ready(function () {
        $('#contactForm').submit(function (event) {
            event.preventDefault(); 
            var formData = $(this).serialize();
            var form = this;
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function (response) {
                    $('#response').html(response.message);
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500
                });
                },
                error: function (error) {
                    console.error('Error:', error);
                },
                complete: function () {
                    $('#contactForm')[0].reset();
                }
            });
        });
    });

    </script>
</x-guest-layout>
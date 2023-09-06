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
    <!-- login start -->
    <section class="login-div position-relative py-70">
        <div class="container">
            <div class="row mx-0">
                <div class="col-xl-12 col-lg-12">
                    <div class="login-form">
                        <div class="title mb-md-5">
                            <h2 class="mb-20" >Login</h2>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group  mb-md-4">
                                <label for="e_mail">
                                    E-mail<span>*</span>
                                </label>
                                <input type="text" class="form-control" name="e_mail" id="e_mail" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group mb-md-4 position-relative">

                                <label for="category">
                                    Password<span>*</span>
                                </label>
                                <input type="password" class="form-control" name="product" id="password" />
                                <a href="forget-password.html" role="link"
                                    class="forget-password position-absolute">Forget Password?</a>
                                    <i toggle="#password" class="ri-eye-off-line password-icn position-absolute "></i>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12" >
                            <label class="remember-me d-flex align-item-center mb-0"  >
                                <input type="checkbox" checked="checked" class=" me-md-2 me-2" />
                                Remember Me
                              </label>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="register-lnk position-relative d-flex align-items-center">
                                <input type="button" class="btn-link mt-md-3 text-decoration-none mb-0" value="Submit" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-12  text-end" >
                            <label class="signup pt-2" >
                                Don’t have an account? <a href="{{route('register')}}" class="text-decoration-none" role="button" >Sign up</a>
                            </label>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="or my-md-4 text-center position-relative">
                                <span>OR</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="facebook-div-box text-center">
                                    <a href="javascript:void(0)" role="button" class="text-decoration-none">
                                        <img src="{{asset('frontend/assets/img/facebook.png')}}" class="text-decoration-none me-md-3"
                                            alt="Facebook" title="Facebook" /> <span>Continue With Facebook</span>
                                    </a>
                                </div>

                                <div class="google-div-box text-center ">
                                    <a href="javascript:void(0)" role="button" class="text-decoration-none">
                                        <img src="{{asset('frontend/assets/img/google.png')}}" class="text-decoration-none me-md-3"
                                            alt="Google" title="Google" /> <span>Continue With Google</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->


    <!-- membership start -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-header position-relative">
            <div class="title">
                <h5 class="mb-0">Membership</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

        </div>
        <div class="offcanvas-body py-0">
            <div class="row border-b">
                <div class="col-lg-12 col-xl-12">
                    <div class="register-form">
                        <div class="row p-0 mt-md-4">
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group mb-md-3">
                                    <label for="membership_as">
                                        Membership
                                    </label>
                                    <select class="form-control" id="membership_as">
                                        <option value="silver">Silver</option>
                                        <option value="gold">Gold</option>
                                        <option value="diamond">Diamond</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group mb-md-3">
                                    <label for="payment_dtl">
                                        Payment Details
                                    </label>
                                    <select class="form-control" id="payment_dtl">
                                        <option value="transfer">Transfer</option>
                                        <option value="deposit">Deposit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group term-under-link  mb-md-3 mt-md-2 d-flex align-items-md-center">
                                    <input type="checkbox" class="checkbox-circle me-md-2" />
                                    <label for="first_name" class="mb-0">
                                        I have read and understood <a href="term-condition.html"
                                            class="term-link text-decoration-none" role="link">Terms & Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="register-lnk position-relative">
                                    <input type="button" class="btn-link mt-md-2 mb-md-3 text-decoration-none"
                                        value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12">

                </div>

            </div>
        </div>
    </div>

    <!-- membership end -->

    <script type="text/javascript">
        $(document).ready(function (e) {
            const input = document.querySelector("#mobile");
            window.intlTelInput(input, {
                initialCountry: "in",
                Country: 'en',
                separateDialCode: true
            });
        });
    </script>
</x-guest-layout>
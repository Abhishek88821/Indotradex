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
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="register-form">
                        <div class="title mb-md-5">
                            <h2>Register Page</h2>
                        </div>
                        <form action="{{route('sign_up')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="row p-0 mt-md-4">
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="register_as">Register As <span>*</span></label>
                                    <select class="form-control @error('role') is-invalid @enderror" id="register_as" name="role">
                                        <option selected disabled >Select Role</option>
                                       @foreach($role as $list)
                                        <option value="{{ $list->id }}">{{ $list->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">First Name <span>*</span></label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                        name="first_name" id="first_name" value="{{ old('first_name') }}" required />
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="last_name">Last Name <span>*</span></label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                        name="last_name" id="last_name" value="{{ old('last_name') }}" required />
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" value="{{ old('email') }}" required />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="password">Password <span>*</span></label>
                                    <input type="text" class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="password" value="{{ old('password') }}" required />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="confirmed">Confirm Password <span>*</span></label>
                                    <input type="text" class="form-control @error('confirmed') is-invalid @enderror"
                                        name="confirmed" id="confirmed" value="{{ old('confirmed') }}" required />
                                    @error('confirmed')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="mobile">Mobile <span>*</span></label>
                                    <div class="mobile-div d-flex align-items-center">
                                        <input type="tel" class="form-control @error('mobile') is-invalid @enderror"
                                            name="mobile" id="mobile" value="{{ old('mobile') }}" required />
                                    </div>
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="website">WebSite <span>*</span></label>
                                    <input type="text" class="form-control @error('website') is-invalid @enderror"
                                        name="website" id="website" value="{{ old('website') }}" required />
                                    @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        Address Name <span>*</span>
                                    </label>
                                    <textarea type="text" class="form-control  @error('address') is-invalid @enderror" name="address" id="message" rows="3"
                                        cols="3">{{ old('address')}}</textarea>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        City/Town <span>*</span>
                                    </label>
                                    <input type="text" class="form-control  @error('city') is-invalid @enderror " name="city" value="{{ old('city')}}" id="city" />
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="pin_code">
                                        Pin Code <span>*</span>
                                    </label>
                                    <input type="text" value="{{ old('pincode')}}" class="form-control  @error('pincode') is-invalid @enderror " name="pincode" id="pincode" />
                                    @error('pincode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="photo_id">
                                        Upload Photo ID <span>*</span>
                                    </label>
                                    <input type="file" class="form-control  @error('photo_id') is-invalid @enderror" value="{{ old('photo_id')}}" name="photo_id" id="photo_id" />
                                    @error('photo_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="photo">
                                        Upload Photo <span>*</span>
                                    </label>
                                    <input type="file" class="form-control  @error('photo') is-invalid @enderror " value="{{ old('photo')}}" name="photo" id="photo" required />
                                    @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group  mb-md-4">
                                    <label for="remark">
                                        Remark <span>*</span>
                                    </label>
                                    <textarea type="text" class="form-control  @error('remark') is-invalid @enderror " name="remark" id="remark" rows="3"
                                        cols="3" required >{{ old('remark')}}</textarea>
                                        @error('remark')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="register-lnk position-relative d-flex align-items-center">
                                    <input type="submit" class="btn-link mt-md-4 me-md-3 text-decoration-none"
                                        value="Submit" />
                                    {{-- <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                        aria-controls="offcanvasExample"
                                        class="btn-link red text-decoration-none mt-md-4">Add Membership</a> --}}
                                </div>
                            </div>
                       
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- agro end -->
   <!-- footer start -->
    {{-- <footer class="foo-div position-relative pt-70 pb-md-5">
        <div class="container d-none ">
            <div class="row  align-items-md-center pb-md-5">
                <div class="col-lg-12 col-xl-12">
                    <div class="foo-newsletter text-center">
                        <h6 class="">Newsletter</h6>
                        <span>
                            Welcome to our newsletter! Stay connected and up-to-date with the latest news,
                            updates,<br />
                            and special offers by subscribing to our newsletter.
                        </span>
                    </div>
                    <div class="foo-newsletter-box d-flex align-items-center">
                        <input type="text" class="form-control" id="foo-email" placeholder="Enter Email Here..." />
                        <input type="button" class="btn btn-newsletter" id="newsletter-btn" value="Subscribe" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-md-2">
            <div class="row border-0">
                <div class="col-lg-5 col-xl-5">
                    <div class="foo-abt-div">
                        <div class="foo-abt-logo mb-md-2">
                            <h1><span>Indo</span>Tradex</h1>
                        </div>
                        <p class="pe-md-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="foo-soc-div mb-lg-1 mb-md-5">
                        <ul class="list-unstyled d-flex align-items-center justify-content-start">
                            <li>
                                <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7">
                    <div class="d-flex flex-wrap justify-content-lg-around justify-content-between">
                        <div class="foo-lst-div">
                            <h5 class="foo-tit-div mb-md-3">Quick Links</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="index.html" class="text-decoration-none" role="link">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-decoration-none" role="link">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="our-team.html" class="text-decoration-none" role="link">
                                        Team
                                    </a>
                                </li>
                                <li>
                                    <a href="register.html" class="text-decoration-none" role="link">
                                        Register
                                    </a>
                                <li>
                                    <a href="contact.html" class="text-decoration-none" role="link">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="foo-lst-div">
                            <h5 class="foo-tit-div mb-md-3">Products</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="product.html" class="text-decoration-none" role="link">
                                        Agro
                                    </a>
                                </li>
                                <li>
                                    <a href="product.html" class="text-decoration-none" role="link">
                                        Metal
                                    </a>
                                </li>
                                <li>
                                    <a href="product.html" class="text-decoration-none" role="link">
                                        Mining
                                    </a>
                                </li>
                                <li>
                                    <a href="product.html" class="text-decoration-none" role="link">
                                        Sea
                                    </a>
                                <li>
                                    <a href="product.html" class="text-decoration-none" role="link">
                                        Precious
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="foo-lst-div">
                            <h5 class="foo-tit-div mb-md-3">Services</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        Term & Condition
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        Disclaimer
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-decoration-none" role="link">
                                        Payment
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12">
                    <div class="foo-soc-div mb-0">
                        <h3 class="foo-counter mt-md-4 mt-3 me-md-5">
                            <span class="d-block">Visitor's Counter</span>
                            <strong>93,02,390</strong>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <div class="copyright position-relative py-md-3 py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6 col-12 col-sm-6 col-md-6">
                    <div class="foo-div-copy d-flex align-items-center justify-content-between">
                        <span>&copy;2023 Copyright | All Rights Reserved</span>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6  col-12 col-sm-6 col-md-6 text-end">
                    <span>
                        Powered By <a href="https://aspireindia.com/" class="text-decoration-none" role="link">
                            Aspire
                            Innovations
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- footer end -->
    

    <!-- membership start -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-header position-relative">
            <div class="title">
                <h5 class="mb-0">Membership</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

        </div>
        <div class="offcanvas-body py-0">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="register-form">
                        <div class="row p-0 mt-md-4">
                            <form action="{{route('membership')}}" method="post">
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group mb-md-3">
                                    <label for="membership_as">
                                        Membership<span>*</span>
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
                                        Payment Details<span>*</span>
                                    </label>
                                    <select class="form-control" id="payment_dtl">
                                        <option value="transfer">Transfer</option>
                                        <option value="deposit">Deposit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group term-under-link  mb-md-3 mt-md-2 d-flex align-items-md-center">
                                   
                                    <label  class="remember-me d-flex align-item-center mb-0" role="button" >
                                        <input type="checkbox" class="me-md-2 mt-0" />
                                        I have read and understood <a href="term-condition.html"
                                            class="term-link text-decoration-none ms-1" role="link">Terms & Conditions.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="register-lnk position-relative">
                                    <input type="button" class="btn-link mt-md-2 mb-md-3 text-decoration-none"
                                        value="Submit">
                                </div>
                            </div>
                            </form>
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
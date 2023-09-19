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
                    <a href="{{route('login')}}" class=" btn btn-outline-primary center m-2 "> Go to Login </a>
                    <div class="login-form"> 
                        <div class="title mb-md-5">
                            <h2 class="mb-20" >Forget Password </h2>
                             <div id="response-message"></div>
                        </div>
                        <form action="{{ route('forgetPassword') }}" method="POST" >
                            @csrf
                        
                            <div class="form-group">
                                <label for="email">E-mail<span>*</span></label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required />
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="form-group" id="otp-section" style="display: none;">
                                <label for="otp">OTP<span>*</span></label>
                                <input type="text" class="form-control" name="otp" id="otp" />
                                @error('otp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group" id="password-section" style="display: none;">
                                <label for="new_password">New Password<span>*</span></label>
                                <input type="password" class="form-control" name="new_password" id="new_password" />
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        
                           
                        
                            <div class="register-lnk position-relative d-flex align-items-center">
                                <button type="submit" class="btn-link mt-3 text-decoration-none mb-0">Submit</button>
                            </div>
                        </form>
                           
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $('form').submit(function (e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('password.reset') }}',
                    data: formData,
                    success: function (response) {
                        $('#otp-section').show();
                            $('#password-section').show();
                            $('#email').prop('readonly', true); // Disable the email input

                            // Add the 'required' attribute to OTP and new_password fields
                            $('#otp').prop('required', true);
                            $('#new_password').prop('required', true);

                            $('#response-message').html('<div class="alert alert-success">' + response.message + '</div>');
                         

                    },
                    error: function (xhr, status, error) {
                        // Handle the error response (e.g., show an error message)
                        var errorMessage = JSON.parse(xhr.responseText);
                        $('#response-message').html('<div class="alert alert-danger">' + errorMessage.message + '</div>');
                    }
                });
            });
        });
    </script>
    


   
</x-guest-layout>
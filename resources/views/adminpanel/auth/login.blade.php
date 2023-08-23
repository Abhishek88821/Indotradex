<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('App_Name','laravel' )}}</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="{{ env('App_Name','laravel' )}}" />
    <meta name="author" content="" />
    <meta name="keywords" content="{{ env('App_Name','laravel' )}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- Core Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link  id="themeColors"  rel="stylesheet" href="{{asset('adminpanel/dist/css/style.min.css')}}" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">
            <div class="col-xl-7 col-xxl-8">
            
              <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
              </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
              <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                <div class="col-sm-8 col-md-6 col-xl-9">
                  <h2 class="mb-3 fs-7 fw-bolder">Welcome to {{ env('App_Name','laravel' )}}</h2>
                  <p class=" mb-9">Your Admin Dashboard</p>
                  <div class="row">
                    @include('partials.errors')
                    <form method="POST" action="{{ route('admin.login') }}">
                      @csrf
                      <div class="mb-3">  
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                        
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-eye" id="showPasswordIcon" style="cursor: pointer;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                      <div class="d-flex align-items-center justify-content-between mb-4">
                          <div class="form-check">
                              <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                              <label class="form-check-label text-dark" for="flexCheckChecked">
                                  Remember this Device
                              </label>
                          </div>
                          <a class="text-primary fw-medium" href="#">Forgot Password ?</a>
                      </div>
                      <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <script>
      const showPasswordIcon = document.getElementById('showPasswordIcon');
      const passwordInput = document.getElementById('exampleInputPassword1');
  
      showPasswordIcon.addEventListener('click', function () {
          const type = passwordInput.getAttribute('type');
          passwordInput.setAttribute('type', type === 'password' ? 'text' : 'password');
          showPasswordIcon.classList.toggle('fa-eye-slash', type === 'password');
      });
  </script>
    <!--  Import Js Files -->
    <script src="{{asset('adminpanel/dist/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('adminpanel/dist/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('adminpanel/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!--  core files -->
    <script src="{{asset('adminpanel/dist/js/app.min.js')}}"></script>
    <script src="{{asset('adminpanel/dist/js/app.init.js')}}"></script>
    <script src="{{asset('adminpanel/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('adminpanel/dist/js/sidebarmenu.js')}}"></script>
    
    <script src="{{asset('adminpanel/dist/js/custom.js')}}"></script>
  </body>
</html>
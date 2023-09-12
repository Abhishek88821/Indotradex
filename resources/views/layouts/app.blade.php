<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Indotradex') }}</title>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">

    <!-- Additional CSS -->
    <link rel="stylesheet" href="{{asset('adminpanel/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminpanel/dist/css/custom.css')}}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    
    <!-- Owl Carousel and Dropzone CSS -->
    <link rel="stylesheet" href="{{asset('adminpanel/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminpanel/dist/libs/dropzone/dist/min/dropzone.min.css')}}">
    
    <!-- Core CSS -->
    <link id="themeColors" rel="stylesheet" href="{{asset('adminpanel/dist/css/style.min.css')}}" />
    
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body >
      
          
              <!-- Preloader -->
              <div class="preloader">
                <img src="{{asset('images/loading.ico')}}" alt="loader" class="lds-ripple img-fluid" />
              </div>
              <!--  Body Wrapper -->
              <div class="page-wrapper" id="main-wrapper" data-theme="black_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
                <!-- Sidebar Start -->
                <aside class="left-sidebar">
                  <!-- Sidebar scroll-->
                  <div>
                    <div class="brand-logo d-flex align-items-center justify-content-between">
                      <a href="{{route('admin')}}" class="text-nowrap logo-img">
                       <h2 class="text-primary"> Indo<span  class="text-success">tradex</span></h2> 
                        {{-- <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-log.svg" class="dark-logo" width="180" alt="" />
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-log.svg" class="light-logo"  width="180" alt="" /> --}}
                      </a>
                      <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8 text-muted"></i>
                      </div>
                    </div>
                    <!-- Sidebar navigation-->
                    @include("../adminpanel.components.sidebar")
                    <!-- End Sidebar navigation -->
                  </div>
                  <!-- End Sidebar scroll-->
                </aside>
                <!--  Sidebar End -->
                <!--  Main wrapper -->
                <div class="body-wrapper">
                  <!--  Header Start -->
                  @include('../adminpanel.components.header')
              
                  <!--  Header End -->

         
                {{ $slot }}
         
                <!-- Modal -->
               
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Are you sure you want to delete this item?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteButton" >Delete</button>
                      </div>
                    </div>
                  </div>
                </div>

        </div>
    </div>
 

  
  <!--  Customizer -->
  <script src="{{ asset('adminpanel/dist/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/js/app.min.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/js/app.init.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/js/app-style-switcher.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/js/custom.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/js/dashboard.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src='https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js'></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
  <script src="{{ asset('adminpanel/dist/js/datatable/datatable-advanced.init.js') }}"></script>
  <script src="{{ asset('adminpanel/dist/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    </body>
</html>

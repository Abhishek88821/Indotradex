<x-guest-layout>
    <!-- login start -->
    <section class="profile-div position-relative py-70">
        <div class="container">
            <div class="row mx-0">
                <div class="col-xl-3 col-lg-3 p-md-0">
                    <div class="profile-menu position-relative d-block d-md-none" >
                        <img src="{{asset('frontend/assets/img/icon/menu.svg')}}" class="img-fluid me-2" alt="Menu Icon" title="Menu"><span>Menu</span>
                    </div>
                    @include('frontend.inc.sidebar')
                </div>
                <div class="col-xl-9 col-lg-9 col-12 col-sm-12 p-md-0 ">
                    <div class="pro-div-box ">
                        <div class="pro-div-box-title position-relative">
                            <div class="mb-20">
                                <h2  >Call</h2>
                            </div>
                            <div
                                class="profile-div-avatar d-flex align-items-center justify-content-start position-relative">
                                <p> Total Attempt <span class=" h2">{{$remain}}</span> Remaining on  Current Month </p>
                                <div class="profile-search d-flex align-items-center d-none ">
                                    <i class="ri-search-line"></i>
                                    <input type="text" class="form-control" placeholder="Search Here..." id="search" />
                                </div>
                            </div>
                        </div>
                        <div class="call-div-cnt row">
                            <div class="col-xl-12 col-lg-4" >
                                <div class="call-div-box position-relative" role="button" >
                                    <a href="javascript:void(0)" rel="nofollow" class="btn-call" id="CallBack">
                                        <div class="btn-call__ico">
                                            <i class="ri-phone-fill"></i>
                                        </div>
                                        <span>Call Back </span>

                                    </a>
                                </div>
                                <p id="error" class="text-danger"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
    <script>
       $(document).ready(function () {
    $('#CallBack').click(function () {
        $('#error').html('Please wait...');
        $.ajax({
            type: 'POST',
            url: '{{ route('callback') }}',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.status === 'success') {
                    Swal.fire(
                        'Good job!',
                        response.message,
                        'success'
                    );

                    var attampt = $('.h2').val() - 1;
                    $('.h2').html(attampt);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message
                    });
                }
            },
            error: function (error) {
                console.log(error.message);
            },
            complete: function () {
                $('#error').html('');
            }
        });
    });
});

    </script>
    
</x-guest-layout>
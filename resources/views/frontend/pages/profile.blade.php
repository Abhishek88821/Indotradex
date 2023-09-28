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
                            <div class="">
                                <h2>Profile</h2>
                            </div>
                            <div
                                class="profile-div-avatar d-flex align-items-center justify-content-end position-relative">
                                <div class="profile-search d-flex align-items-center d-none ">
                                    <i class="ri-search-line"></i>
                                    <input type="text" class="form-control" placeholder="Search Here..." id="search" />
                                </div>
                            </div>
                        </div>
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                        <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                        <div class="register-form row">
                           @csrf
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="registerby">
                                        Register As <span>*</span>
                                    </label>
                                    <select class="form-control" id="register_as" name="role" >
                                        <option value="{{ $profile->role->id }}" selected >{{ $profile->role->name }}</option>
                                       </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        First Name <span>*</span>
                                    </label>
                                    <input type="text" value="{{ $profile->firstName}}" class="form-control" name="firstName"
                                        id="firstName">
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="last_name">
                                        Last Name <span>*</span>
                                    </label>
                                    <input type="text" value="{{ $profile->LastName }}" class="form-control" name="LastName" id="LastName">
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        E-mail <span>*</span>
                                    </label>
                                    <input type="email" value="{{ $profile->email  }}" class="form-control"
                                        name="email" id="email">
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        Mobile <span>*</span>
                                    </label>
                                    <div class="mobile-div d-flex align-items-center">
                                        <input type="number" class="form-control" name="mobile" value="{{ $profile->mobile  }}"
                                            id="mobile" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="website">
                                        Website <span>*</span>
                                    </label>
                                    <input type="text" class="form-control" value="{{ $profile->website }}" name="website"
                                        id="website">
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        Address Name <span>*</span>
                                    </label>
                                    <textarea type="text" class="form-control" name="address" id="message" rows="3"
                                        cols="3">{{ $profile->address }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        City/Town <span>*</span>
                                    </label>
                                    <input type="text" class="form-control" value="{{ $profile->city }}" name="city" id="city">
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="pin_code">
                                        Pin Code <span>*</span>
                                    </label>
                                    <input type="number" class="form-control" value="{{ $profile->pinCode }}" name="pinCode"
                                        id="pin_code">
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="photo_id">
                                        Upload Photo ID <span>*</span>
                                    </label>
                                    <div class="pho-id d-flex align-items-center">
                                        <div class="pho-div-preview">
                                            <img src="{{ $profile->photoIds->filepath}}"
                                                class="img-fluid w-100" alt="Preview" title="" />
                                        </div><input type="file" class="form-control" name="photo_id" id="photo_id">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="photo">
                                        Upload Photo <span>*</span>
                                    </label>
                                    <div class="pho-id d-flex align-items-center">
                                        <div class="pho-div-preview">
                                            <img src="{{ $profile->photos->filepath}}"
                                                class="img-fluid w-100" alt="Preview" title="" />
                                        </div><input type="file" class="form-control" name="photo" id="photo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group  mb-md-4">
                                    <label for="remark">
                                        Remark <span>*</span>
                                    </label>
                                    <textarea type="text" class="form-control" name="remark" id="remark" rows="3"
                                        cols="3">{{ $profile->remark }}</textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="register-lnk position-relative d-flex align-items-center">
                                    <input type="submit" class="btn-link mt-md-4 me-md-3 text-decoration-none"
                                        value="Submit">
                                </div>
                            </div>
                     
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</x-guest-layout>

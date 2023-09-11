<x-guest-layout>
    <!-- login start -->
    <section class="profile-div position-relative py-70">
        <div class="container">
            <div class="row mx-0">
                <div class="col-xl-3 col-lg-3 p-md-0">
                    <div class="profile-menu position-relative d-block d-md-none" >
                        <img src="assets/img/icon/menu.svg" class="img-fluid me-2" alt="Menu Icon" title="Menu"><span>Menu</span>
                    </div>
                    @include('frontend.inc.sidebar')
                </div>
                <div class="col-xl-9 col-lg-9 col-12 col-sm-12 p-md-0 ">
                    <div class="pro-div-box bg-white">
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
                        <div class="register-form row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="registerby">
                                        Register As <span>*</span>
                                    </label>
                                    <select class="form-control" id="register_as">
                                        <option value="buyer" selected >Buyer</option>
                                       </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        First Name <span>*</span>
                                    </label>
                                    <input type="text" value="Abhishek" class="form-control" name="first_name"
                                        id="first_name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="last_name">
                                        Last Name <span>*</span>
                                    </label>
                                    <input type="text" value="Jha" class="form-control" name="last_name" id="last_name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        E-mail <span>*</span>
                                    </label>
                                    <input type="text" value="jhaabhishek88821@gmail.com" class="form-control"
                                        name="first_name" id="first_name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        Mobile <span>*</span>
                                    </label>
                                    <div class="mobile-div d-flex align-items-center">
                                        <input type="text" class="form-control" name="mobile" value="8882130397"
                                            id="mobile" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="website">
                                        Website <span>*</span>
                                    </label>
                                    <input type="text" class="form-control" value="aspireindia.com" name="website"
                                        id="website">
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        Address Name <span>*</span>
                                    </label>
                                    <textarea type="text" class="form-control" name="address" id="message" rows="3"
                                        cols="3">Sector-49, Gurugram</textarea>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="first_name">
                                        City/Town <span>*</span>
                                    </label>
                                    <input type="text" class="form-control" value="Gurugram" name="city" id="city">
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group  mb-md-4">
                                    <label for="pin_code">
                                        Pin Code <span>*</span>
                                    </label>
                                    <input type="text" class="form-control" value="120023" name="pin_code"
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
                                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YXZhdGFyfGVufDB8fDB8fHww&w=1000&q=80"
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
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeDHYntDanD7apZJ4x7oe3I3SSWyrQRQsqRA&usqp=CAU"
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
                                        cols="3">Write Remark</textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="register-lnk position-relative d-flex align-items-center">
                                    <input type="button" class="btn-link mt-md-4 me-md-3 text-decoration-none"
                                        value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</x-guest-layout>

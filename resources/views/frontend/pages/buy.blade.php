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
                    <div class="profile-menu position-relative d-block d-md-none" >
                        <img src="assets/img/icon/menu.svg" class="img-fluid me-2" alt="Menu Icon" title="Menu" /> 
                    </div>
                    <div class="pro-div-box bg-white">
                        <div class="pro-div-box-title position-relative">
                            <div class="">
                                <h2>Buy</h2>
                                <div class="profile-close position-relative d-block d-md-none" >
                                    <img src="assets/img/icon/close.svg" class="img-fluid me-2" alt="Menu Icon" title="Menu" /> 
                                </div>
                            </div>
                            <div
                                class="profile-div-avatar d-flex align-items-center justify-content-end position-relative">
                                <div class="profile-search d-flex align-items-center ">
                                    <i class="ri-search-line"></i>
                                    <input type="text" class="form-control" placeholder="Search Here..." id="search" />
                                </div>
                            </div>
                        </div>
                        <div class="pro-div-cnt row align-items-center">
                            <div class="col-lg-12 col-xl-12" >
                                    <div class="supply-div-box" >
                                        <table class="table table-bordered text-center table-responsive mb-0" >
                                            <thead>
                                                <tr>
                                                    <th style="width: 70px;" ><input type="checkbox" id="" /></th>
                                                    <th>S.No.</th>
                                                    <th>Image</th>
                                                    <th>Quanlity</th>
                                                    <th>Quantity</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" id="" /></td>
                                                    <td>1</td>
                                                    <td><img src="assets/img/cashew1.jpg" style="width: 50px;" class="img-fluid"  alt="cashew nuts" /></td>
                                                    <td>Premium</td>
                                                    <td>100kg</td>
                                                    <td><span class="completed">Approved</span></td>
                                                    <td><div class="link-supply"><i class="ri-edit-box-fill me-2"></i> <i class="ri-delete-bin-fill"></i></div></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" id="" /></td>
                                                    <td>2</td>
                                                    <td><img src="assets/img/coal.jpg" style="width: 50px;" class="img-fluid"  alt="Coal" /></td>
                                                    <td>Regular</td>
                                                    <td>180kg</td>
                                                    <td><span class="pending">Pending</span></td>
                                                    <td><div class="link-supply"><i class="ri-edit-box-fill me-2"></i> <i class="ri-delete-bin-fill"></i></div></td>
                                                 </tr>
                                                <tr>
                                                    <td><input type="checkbox" id="" /></td>
                                                    <td>3</td>
                                                    <td><img src="assets/img/metal.jpg" style="width: 50px;" class="img-fluid"  alt="metal" /></td>
                                                    <td>Regular</td>
                                                    <td>130kg</td>
                                                    <td><span class="pending">Pending</span></td>
                                                    <td><div class="link-supply"><i class="ri-edit-box-fill me-2"></i> <i class="ri-delete-bin-fill"></i></div></td>
                                                
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" id="" /></td>
                                                    <td>4</td>
                                                    <td><img src="https://images.pexels.com/photos/6003907/pexels-photo-6003907.jpeg" style="width: 50px;" class="img-fluid"  alt="cashew nuts" /></td>
                                                    <td>Premium</td>
                                                    <td>200kg</td>
                                                    <td><span class="completed">Approved</span></td>
                                                    <td><div class="link-supply"><i class="ri-edit-box-fill me-2"></i> <i class="ri-delete-bin-fill"></i></div></td>
                                                
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" id="" /></td>
                                                    <td>5</td>
                                                    <td><img src="https://images.pexels.com/photos/4869355/pexels-photo-4869355.jpeg" style="width: 50px;" class="img-fluid"  alt="cashew nuts" /></td>
                                                    <td>Premium</td>
                                                    <td>100kg</td>
                                                    <td><span class="completed">Approved</span></td>
                                                    <td><div class="link-supply"><i class="ri-edit-box-fill me-2"></i> <i class="ri-delete-bin-fill"></i></div></td>
                                                
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"id="" /></td>
                                                    <td>6</td>
                                                    <td><img src="https://images.pexels.com/photos/4040644/pexels-photo-4040644.jpeg" style="width: 50px;" class="img-fluid"  alt="cashew nuts" /></td>
                                                    <td>Premium</td>
                                                    <td>100kg</td>
                                                    <td><span class="cancel">Cancel</span></td>
                                                    <td><div class="link-supply"><i class="ri-edit-box-fill me-2"></i> <i class="ri-delete-bin-fill"></i></div></td>
                                                
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" id="" /></td>
                                                    <td>7</td>
                                                    <td><img src="https://images.pexels.com/photos/10787584/pexels-photo-10787584.jpeg" style="width: 50px;" class="img-fluid"  alt="cashew nuts" /></td>
                                                    <td>Premium</td>
                                                    <td>100kg</td>
                                                    <td><span class="completed">Approved</span></td>
                                                    <td><div class="link-supply"><i class="ri-edit-box-fill me-2"></i> <i class="ri-delete-bin-fill"></i></div></td>
                                                
                                                </tr>

                                            </tbody>
                                        </table>
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
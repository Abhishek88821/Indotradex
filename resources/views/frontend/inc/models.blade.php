{{-- login redirect modal --}}
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LoginModalLabel">Need Authentication</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Please note that you need to log in to send an inquiry.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a type="button" href="{{route('login')}}" class="btn btn-primary" id="goToLoginPageButton">Go To Login Page</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="AuthorizeModal" tabindex="-1" aria-labelledby="AuthorizeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AuthorizeModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You doesn't have any active plan  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="goToLoginPageButton">Go To Dashboard</button>
            </div>
        </div>
    </div>
</div>





      
    <!-- SupplierEnquiry -->
    <div class="modal fade" id="ProductSupplierEnquiry" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header orange">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Supplier Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="supplier-enquiry-form" action="{{ route('submitSupplierEnquiry') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="product_id" name="product_id" value="" class="product_id">
                         <input type="hidden" name="type" value="1" >
                        <div class="row register-form p-0 mt-md-4">
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_name">
                                        Product Name<span>*</span>
                                    </label>
                                    <input type="text" readonly class="form-control product_name " id="product_name" name="product_name" required />
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_size">
                                        QTY Tons<span>*</span>
                                    </label>
                                    <input type="nubmer" class="form-control" id="product_size" name="qty" required />
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_quantity">
                                        Quantity <span>*</span>
                                    </label>
                                  <select name="quantity"  class="form-control" id="product_quantity">
                                    <option selected disabled> Select Quantity</option>
                                    <option value="Standard">Standard</option> 
                                    <option value="Below Standard">Below Standard</option>  
                                    <option value="Best">Best</option>  
                                    <option value="Hand Picked">Hand Picked</option>   
                                  </select>  
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_quality"> Rate in IDR / Kg  <span>*</span>
                                    </label>
                                    <input type="text" class="form-control" id="product_quality" name="Rate" required />
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_quantity">
                                        Choose Payment Terms <span>*</span>
                                    </label>
                                  <select name="payment"  class="form-control" id="product_quantityt">
                                    <option selected disabled> Select Payment Terms</option>
                                    <option value="Cash onsite">Cash onsite</option> 
                                    <option value="Cash at Delivery">Cash at Delivery</option>  
                                    <option value="Flexible">Flexible</option>  
                                    <option value="Negotiable">Negotiable</option>  
                                    </select>   
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_quantity">
                                        Choose Delivery Time in days <span>*</span>
                                    </label>
                                  <select name="delivery"  class="form-control" id="product_quantityt">
                                    <option selected disabled> Select Delivery Time</option>
                                    <option value="5">5 Days</option> 
                                    <option value="10">10 Days</option>  
                                    <option value="15">15 Days</option>  
                                    <option value="20">20 Days</option>   
                                    <option value="25">25 Days</option>  
                                    <option value="30">30 Days</option>  
                                    <option value="45">45 Days</option>   
                                    <option value="60">60 Days</option>  
                                  </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="quality_pdf"> Upload Quality Report  <span>*</span>
                                    </label>
                                    <input type="file" class="form-control" id="product_quality" name="Quality_Report" required />
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_quality"> Upload Photograph  <span>*</span>
                                    </label>
                                    <input type="file" class="form-control" id="product_quality" name="photograph" required />
                                </div>
                            </div>


                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group  mb-md-4">
                                    <label for="product_remark">
                                        Remark/Comment<span>*</span>
                                    </label>
                                    <textarea type="text" class="form-control" name="remark" id="product_remark" rows="3" cols="3" required></textarea>
                                </div>
                            </div>
    
                            {{-- <button type="button" id="add-product-btn" class="add-product-btn btn btn-primary ">Add Other Product</button> --}}

                            <div class="col-xl-12 col-lg-12">
                                <div class="register-lnk position-relative d-flex align-items-center">
                                    <button type="submit" class="btn-link mt-md-0 me-md-0 text-decoration-none orange">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
       <!-- end SupplierEnquiry -->


           <!-- ProductBuyingEnquiry -->
    <div class="modal fade" id="ProductBuyingEnquiry" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header orange">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Buying Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form  id="buying-enquiry-form" action="{{ route('submitSupplierEnquiry') }}" method="POST"  enctype="multipart/form-data" >
                        @csrf

                        <input type="hidden" id="product_id" name="product_id" value="" class="product_id">
                        <input type="hidden" name="type" value="2" >
                        <div class="row register-form p-0 mt-md-4">
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_name">
                                        Product Name<span>*</span>
                                    </label>
                                    <input type="text" class="form-control product_name " readonly id="product_name" name="product_name" value="" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_size">
                                        QTY Tons<span>*</span>
                                    </label>
                                    <input type="text" class="form-control" id="product_size" name="qty" required />
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_quantity">
                                        Quality of Item <span>*</span>
                                    </label>
                                  <select name="quantity"  class="form-control" id="product_quantityt">
                                    <option value="Good">Budget</option>  
                                    <option value="Avarage">Medium</option>  
                                    <option value="Baad">High</option> 
                                    <option value="Baad">Best Color</option>    
                                  </select>
                                   
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group mb-md-4">
                                    <label for="product_quality"> Rate / Kg  <span>*</span>
                                    </label>
                                    <input type="text" class="form-control" id="product_quality" name="Rate" required />
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group  mb-md-4">
                                    <label for="product_remark">
                                        Remark/Comment<span>*</span>
                                    </label>
                                    <textarea type="text" class="form-control" name="remark" id="product_remark" rows="3" cols="3" required></textarea>
                                </div>
                            </div>
    
                            <div class="col-xl-12 col-lg-12">
                                <div class="register-lnk position-relative d-flex align-items-center">
                                    <button type="submit" class="btn-link mt-md-0 me-md-0 text-decoration-none orange">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
       <!-- end ProductBuyingEnquiry -->

<!-- ProductSourcingEnquiry -->
   <div class="modal fade" id="ProductSourcingEnquiry" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header orange">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Sourcing Enquiry</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="sourcing-enquiry-form" action="{{ route('submitSupplierEnquiry') }}" method="POST">
                    @csrf
                    <input type="hidden" id="product_id" name="product_id" value="" class="product_id">
                    <input type="hidden" name="type" value="3" >
                    <div class="row register-form p-0 mt-md-4">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="product_name">
                                    Product Name<span>*</span>
                                </label>
                                <input type="text" class="form-control product_name " id="product_name" name="product_name" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="product_size">
                                    Size of Item Carat/ gm<span>*</span>
                                </label>
                                <input type="text" class="form-control" id="product_size" name="qty" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="product_quantity">
                                    Grade/ Quality of Item <span>*</span>
                                </label>
                              <select name="quantity"  class="form-control" id="product_quantityt">
                                <option  selected disabled > Select Quality</option>
                                <option value="Budget">Budget</option>  
                                <option value="Medium">Medium</option>  
                                <option value="High">High</option>     
                                <option value="Best Color">Best Color</option>  
                              </select>
                               
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="product_quantity">
                                    Other Items to be included <span>*</span>
                                </label>
                              <select name="otherItems"  class="form-control" id="product_quantityt">
                                <option  selected disabled > Select Items</option>
                                <option value="Gold">Gold</option>  
                                <option value="Silver">Silver</option>
                            </select>  
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="product_quantity">
                                    Item for Making <span>*</span>
                                </label>
                              <select name="forMaking"  class="form-control" id="product_quantityt">
                                <option  selected disabled > Select Items</option>
                                <option value="Ring">Ring</option>  
                                <option value="Neckles">Neckles</option>  
                                <option value="Other">Other</option>  
                            </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-md-4">
                                <label for="product_quality"> Number of Pieces <span>*</span>
                                </label>
                                <input type="text" class="form-control" id="product_quality" name="number_of_pieces" required />
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group  mb-md-4">
                                <label for="product_remark">
                                    Remark/Comment<span>*</span>
                                </label>
                                <textarea type="text" class="form-control" name="remark" id="product_remark" rows="3" cols="3" required></textarea>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="register-lnk position-relative d-flex align-items-center">
                                <button type="submit" class="btn-link mt-md-0 me-md-0 text-decoration-none orange">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
   <!-- end ProductBuyingEnquiry -->

 {{-- project modal start  --}}

  <!-- modal investment start -->
  <div class="modal fade" id="investmentGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Investor Enquiry</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="investmentGET-form"  action="{{route('save.investment')}}"  method="POST">
                <div class="row register-form p-0 mt-md-4">
                    <input type="hidden" name="project_id" class="product_id">
                    <input type="hidden" name="type" value="1" >
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group  mb-md-4">
                            <label for="registerby">
                                Project name  <span>*</span>
                            </label>
                           <input type="text" name="project_name" readonly id="product_name" class="product_name form-control ">
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group mb-md-4">
                            <label for="registerby">
                                Project Interest Selection <span>*</span>
                            </label>
                            <select class="form-control" id="register_as" name="interest">
                                <option selected disabled> Project Interest </option>
                                <option value="lead_ore">Lead Ore</option>
                                <option value="magnesium_ore">Magnesium Ore</option>
                                <option value="carbon">Carbon</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group  mb-md-4">
                            <label for="registerby">
                                Requirement <span>*</span>
                            </label>
                            <select class="form-control" id="register_as" name="requirement">
                                <option value="info">Infomation</option>
                                <option value="Clarification">Clarification</option>
                                <option value="term_proceed">Terms To Proceed</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group  mb-md-4">
                            <label for="registerby">
                                Present Business <span>*</span>
                            </label>
                           <input type="text" class="form-control" id="pre_business" name="p_business" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        <div class="form-group  mb-md-4">
                            <label for="first_name">
                                Remark/Comment<span>*</span>
                            </label>
                            <textarea type="text" class="form-control" name="remark" id="message" rows="3" cols="3"></textarea>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12">
                        <div class="register-lnk position-relative d-flex align-items-center">
                            <input type="submit" class="btn-link mt-md-0 me-md-0 text-decoration-none" value="Submit">
                        </div>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>
<!-- modal investment end -->
<!-- modal available start -->
<div class="modal fade" id="availableGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header red" style="background: var(--red);">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Project Owner Enquiry</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('save.investment')}}"  method="POST"  enctype="multipart/form-data" id="availableGET_form">
                <div class="row register-form p-0 mt-md-4">
                    <input type="hidden" name="project_id" class="product_id">
                    <input type="hidden" name="type"  value="2">
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group  mb-md-4">
                            <label for="registerby">
                                Project name  <span>*</span>
                            </label>
                           <input type="text" name="project_name" readonly id="product_name" class="product_name form-control ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group mb-md-4">
                            <label for="registerby">
                                Upload Photo <span>*</span>
                            </label>
                            <input type="file" id="uplaod_photo" class="form-control" name="photo" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        <div class="form-group  mb-md-4">
                            <label for="first_name">
                                Remark/Comment<span>*</span>
                            </label>
                            <textarea type="text" class="form-control" name="remark" id="message" rows="3" cols="3"></textarea>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12">
                        <div class="register-lnk position-relative d-flex align-items-center">
                            <input type="submit" style="background: var(--red);" class="btn-link mt-md-0 me-md-0 text-decoration-none" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>



{{-- business Enquiry start --}}

 <!-- Modal -->
 <div class="modal fade" id="businessGET" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Business Enquiry</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('business.enquiry.submit') }}" method="post" id="businessGET_form">
                    @csrf
                <div class="row register-form p-0 mt-md-4">
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group mb-md-4">
                            <label for="registerby">
                                Type Of Support <span>*</span>
                            </label>
                            <select class="form-control" id="register_as" name="type_of_support">
                                @foreach (App\Models\Business::active()->get() as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group  mb-md-4">
                            <label for="cur_bus">
                                Your Current Business<span>*</span>
                            </label>
                            <input type="text" class="form-control" name="bussiness" id="cur_bus">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        <div class="form-group  mb-md-4">
                            <label for="first_name">
                                Remark/Comment<span>*</span>
                            </label>
                            <textarea type="text" class="form-control" name="remarks" id="message" rows="3" cols="3"></textarea>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12">
                        <div class="register-lnk position-relative d-flex align-items-center">
                            <input type="submit" class="btn-link mt-md-0 me-md-0 mb-0 text-decoration-none" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
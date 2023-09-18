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
                                                @forelse ($products as $item)
                                                <tr>
                                                    {{-- <td><input type="checkbox" id="" /></td> --}}
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{$item->product->name }}</td>
                                                    <td><img src="{{asset($item->product->images?->filepath)}}" style="width: 50px;" class="img-fluid"  alt="{{$item->product->images?->file_original_name }}" /></td>
                                                    <td>{{$item->quantity}}</td>
                                                    <td>{{$item->qty}}</td>
                                                    <td><span class="{{status($item->status)}}">{{status($item->status)}}</span></td>
                                                    <td>
                                                        <div class="link-supply">
                                                            {{-- <a href="{{ route('edit.supply', $item->id) }}"><i class="ri-edit-box-fill me-2"></i></a> --}}
                                                            <a href="{{ route('delete.Enqueiry', $item->id) }}" class="text-decoration-none" onclick="return confirm('Are you sure you want to delete this supply entry?')"><i class="ri-delete-bin-fill"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @empty
                                                   <tr> Not Have Any Supply Enquiry </tr>
                                                @endforelse
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
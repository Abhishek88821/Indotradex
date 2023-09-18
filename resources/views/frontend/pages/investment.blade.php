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
                    <div class="pro-div-box bg-white">
                        <div class="pro-div-box-title position-relative">
                            <div class="">
                                <h2>Investment</h2>
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
                                        @if($project->isnotempty())
                                        <table class="table table-bordered text-center table-responsive mb-0" >
                                            <thead>
                                                <tr>
                                                    <th style="width: 70px;" ><input type="checkbox" id="" /></th>
                                                    <th>S.No.</th>
                                                    <th>Image</th>
                                                    <th>Project Name</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @forelse ($project as $item)
                                             <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                    <td>{{$item->project->name }}</td>
                                                    <td><img src="{{asset($item->project->images?->filepath)}}" style="width: 50px;" class="img-fluid"  alt="{{$item->product->images?->file_original_name }}" /></td>
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
                                                 <tr> No Investment data found</tr>
                                             @endforelse
                                               
                                             
                                            </tbody>
                                        </table>
                                    
                                            
                                        @else
                                               <h4>No Investment data found !! </h4>
                                        @endif
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
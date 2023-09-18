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
                                <h2>Meeting</h2>
                            </div>
                            <div
                                class="profile-div-avatar d-flex align-items-center justify-content-end position-relative">
                                <div class="profile-search d-flex align-items-center ">
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
                        
                            <form action="{{route('metting.request')}}" method="post" enctype="multipart/form-data">
                            <div class="meeting-div-cnt row">
                               @csrf
                               
                                <div class="col-lg-6 col-xl-6">
                                    <div class="form-group  mb-md-4">
                                        <label for="first_name">
                                            Via<span>*</span>
                                        </label>
                                        <select name="via" id="" class="form-control">
                                            <option value="online">Online</option>
                                            <option value="physical">Physical</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-xl-6">
                                    <div class="form-group  mb-md-4">
                                        <label for="last_name">
                                            Time <span>*</span>
                                        </label>
                                        <input type="datetime-local"  class="form-control" name="time" id="time">
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-xl-6">
                                    <div class="form-group  mb-md-4">
                                        <label for="first_name">
                                           Perpose <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" placeholder=" Enter Perpose Here ..."
                                            name="perpose" id="perpose">
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-xl-6">
                                    <div class="form-group  mb-md-4">
                                        <label for="first_name">
                                            Message <span>*</span>
                                        </label>
                                        <div class="mobile-div d-flex align-items-center">
                                            <textarea type="text" class="form-control" name="message"
                                                id="mobile" > Enter Message Here ...</textarea>
                                        </div>
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
                        <div class="pro-div-cnt row align-items-center my-2">
                            <div class="col-lg-12 col-xl-12" >
                                    <div class="supply-div-box" >
                                        @if($metting->isnotempty())
                                        <table class="table table-bordered text-center table-responsive mb-0" >
                                            <thead>
                                                <tr>
                                                    
                                                    <th>S.No.</th>
                                                    <th>Via</th>
                                                    <th>Time</th>
                                                    <th>Link</th>
                                                    <th>Perpose</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @forelse ($metting as $item)
                                             <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                    <td>{{$item->via }}</td>
                                                    <td>{{ $item->time }}</td>
                                                    <td>{{$item->perpose}}</td>
                                                    <td>{{$item->link ?? 'none' }}</td>
                                                    <td><span class="{{status($item->status)}}">{{status($item->status)}}</span></td>
                                                    <td>
                                                        <div class="link-supply">
                                                            {{-- <a href="{{ route('edit.supply', $item->id) }}"><i class="ri-edit-box-fill me-2"></i></a> --}}
                                                            <a href="{{ route('delete.metting', ['id' => $item->id]) }}" class="text-decoration-none" onclick="return confirm('Are you sure you want to delete this supply entry?')"><i class="ri-delete-bin-fill"></i></a>
                                                        </div>
                                                    </td>
                                            </tr> 
                                             @empty
                                                 <tr> No Metting data found</tr>
                                             @endforelse
                                               
                                             
                                            </tbody>
                                        </table>
                                    
                                            
                                        @else
                                               <h4>No Metting data found !! </h4>
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
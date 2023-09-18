<x-app-layout>
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2 d-flex justify-content-between">
                            <h4 class="mb-0">Visit Enquiry </h4>
                            <div id="alert-container"></div>

                        </div>
                        <div class="">
                            <table id="file_export"
                                class="table border table-striped table-bordered display text-nowrap">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                      
                                        <th>User </th>
                                        <th>Tick</th>
                                        <th>Message </th>
                                        {{-- <th>Type </th>
                                        <th>Status </th>
                                        <th>Options</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visit as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        
                                       
                                        <td>{{ $item->user->firstName .' '. $item->user->LastName   }}</td>
                                        <td>@foreach( json_decode($item->options ) as $list )
                                              {{  $list }} , 
                                            @endforeach
                                        </td>
                                        <td>{{  $item->massege }}</td>

                                        {{-- <td>
                                            {{ $item->type == 1 ? 'Supplier' : ($item->type == 2 ? 'Buying' : ($item->type == 3 ? 'Sourcing' : '')) }}
                                        </td>
                                        <td>
                                            <select name="status" class="form-control status-dropdown" data-id="{{ $item->id }}">
                                                <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Pending</option>
                                                <option value="2" {{ $item->status == 2 ? 'selected' : '' }}>Approved</option>
                                                <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                        </td> --}}
                                        
                                        
                                        {{-- <td class="action-cell">
                                            <a href="#" class="text-primary p-2 view-details" data-toggle="modal" data-target="#viewModal"
                                            data-details="{{ json_encode($item) }}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

<x-app-layout>
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2 d-flex justify-content-between">
                            <h4 class="mb-0">Tranding Products</h4>
                            <a href="{{ route('admin.product.create') }}" class="btn btn-success">Create New</a>
                        </div>

                        <div class="">
                            <table id="file_export"
                                class="table border table-striped table-bordered display text-nowrap">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name </th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Status </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td class="image-cell">
                                            <div class="image-container">
                                                <img src="{{ asset($item->images->filepath)}}" alt="{{ $item->images->file_original_name }}" class="preview">
                                            </div>
                                        </td>
                                        <td>{{ $item->categorys->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.product.status',['id' => $item->id ])}}" class="text-primary">
                                                <i class="fa-solid {{ $item->status == 1 ? 'fa-toggle-on' : 'fa-toggle-off' }}"></i>
                                            </a>
                                        </td>
                                        <td class="action-cell">
                                           <a href="#" class="text-primary p-2">  <i class="fa-solid fa-eye"></i> </a>
                                            <a href="{{ route('admin.product.edit', ['id' =>$item->id ])}}" class="text-success p-2">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a> 
                                            <a href="{{ route('admin.product.destroy',['id' =>  $item->id])}}" class="text-danger p-2">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
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

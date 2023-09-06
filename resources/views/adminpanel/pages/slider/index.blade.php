<x-app-layout>
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2 d-flex justify-content-between">
                            <h4 class="mb-0">Slider </h4>

                            <a href="{{ route('slider.create') }}" class="btn btn-success">Create New</a>

                        </div>

                        <div class="">
                            <table id="file_export"
                                class="table border table-striped table-bordered display text-nowrap">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                       
                                        <th>Banner</th>
                                        <th>Order</th>
                                        <th>Status </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slider as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        
                                        <td class="image-cell">
                                            <div class="image-container">
                                                <img src="{{ asset($item->images->filepath ?? ' ')}}" alt="{{ $item->images->file_original_name }}" class="preview">
                                            </div>
                                        </td>
                                        <td>{{ $item->order }}</td>
                                        <td>
                                            <a href="{{ route('slider.show',[$item->id])}}" class="text-primary">
                                                <i class="fa-solid {{ $item->status == 1 ? 'fa-toggle-on' : 'fa-toggle-off' }}"></i>
                                            </a>
                                        </td>
                                        <td class="action-cell">
                                           <a href="#" class="text-primary p-2">  <i class="fa-solid fa-eye"></i> </a>
                                            <a href="{{ route('slider.edit', [$item->id])}}" class="text-success p-2">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a> 
                                            <form action="{{ route('slider.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger p-2" onclick="return confirm('Are you sure you want to delete this slider?')">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
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

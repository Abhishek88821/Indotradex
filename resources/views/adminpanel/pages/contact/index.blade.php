<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2 d-flex justify-content-between">
                            <h4 class="mb-0">Tranding Category</h4>

                            <a href="{{ route('admin.category.create') }}" class="btn btn-success">Create New</a>

                        </div>

                        <div class="">
                            <table id="file_export"
                            class="table border table-striped table-bordered display text-nowrap">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name </th>
                                    <th>Org </th>
                                    <th>Category </th>
                                    <th>State</th>
                                    <th>e_mail</th>
                                   
                                    <th>mobile</th>
                                    <th>Products</th>
                                    <th>product</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $key => $item)
                                <tr>
                                  <td>{{ ++$key }}</td>
                                   <td>{{ $item->first_name }}</td>
                                  <td> {{ $item->org_nme }}</td>
                                  <td> {{ $item->category }}</td>
                                  <td> {{ $item->state }}</td>
                                  <td> {{ $item->e_mail }}</td>
                                  <td> {{ $item->mobile }}</td>
                                  <td> {{ $item->Products }}</td>
                                  <td> {{ $item->product }}</td>
                                  <td> {{ $item->message }}</td>

                              </tr>
                                @endforeach
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

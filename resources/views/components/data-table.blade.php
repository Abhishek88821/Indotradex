<div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <div class="mb-2 d-flex justify-content-between">
                    <h4 class="mb-0">{{ $name }}</h4>
                    @if ($create)
                        <a href="{{ route($route.'.create') }}" class="btn btn-success">Create New</a>
                    @endif
                </div>
                
              <div class="table-responsive">
                <table
                  id="file_export"
                  class="table border table-striped table-bordered display text-nowrap"
                >
                  <thead>
                    <!-- start row -->
                    <tr>
                      @foreach ($columns as $column)
                      <th>{{  $column }}</th>
                      @endforeach
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($data as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                    @endforeach
                   
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
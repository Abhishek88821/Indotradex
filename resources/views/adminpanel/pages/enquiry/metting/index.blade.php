<x-app-layout>
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2 d-flex justify-content-between">
                            <h4 class="mb-0">Metting Enquiry </h4>
                            <div id="alert-container"></div>

                        </div>
                        <div class="">
                            <table id="file_export"
                                class="table border table-striped table-bordered display text-nowrap">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Via</th>
                                        <th> User </th>
                                        <th>Time </th>
                                        <th>Status </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($metting as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td> {{ $item->via }}</td>
                                        <td>{{ $item->user->firstName  }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->time)->format('d-m-Y H:i:s') }}</td>
                                        <td>
                                            <select name="status" class="form-control status-dropdown" data-id="{{ $item->id }}">
                                                <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Pending</option>
                                                <option value="2" {{ $item->status == 2 ? 'selected' : '' }}>Approved</option>
                                                <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                        </td>
                                        
                                        
                                        <td class="action-cell">
                                            <a href="#" class="text-primary p-2 view-details" data-toggle="modal" data-target="#viewModal"
                                            data-details="{{ json_encode($item) }}">
                                            <i class="fa-solid fa-eye"></i>
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



    <!-- Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Content will be dynamically filled here -->
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function () {
    $('#file_export').on('click', '.view-details', function () {
        var data = $(this).data('details');
        $.ajax({
    url: '{{ route("admin.metting.enquiries.data") }}',
    type: 'POST',
    data: { id: data.id, _token: '{{ csrf_token() }}' },
    success: function (response) {
        // console.log(response);
        $('#viewModal').modal('show');
        var modalBody = $('#viewModal .modal-body');
        modalBody.empty();
        modalBody.append(response);
    },
    error: function (xhr, status, error) {
        console.log('AJAX Error: ' + status + ' - ' + error);
    }
});
    });

});



// status change 

$(document).ready(function () {
    $(document).on('change', '.status-dropdown', function () {
        var itemId = $(this).data('id');
        var newStatus = $(this).val();
        $.ajax({
            url: '{{ route("admin.metting.enquiries.status") }}',
            type: 'POST',
            data: { id: itemId, status: newStatus, _token: '{{ csrf_token() }}' },
            dataType: 'json',
            success: function (response) {
                var alertClass = response ? 'alert-success' : 'alert-danger';
                var message = response.message;

                // Create a Bootstrap alert element
                var alert = $('<div class="alert ' + alertClass + ' alert-dismissible fade show" role="alert">' +
                    '<strong>' + message + '</strong>' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '</div>');

                $('#alert-container').html(alert);

                setTimeout(function () {
                    alert.alert('close');
                }, 5000);
            },
            error: function (xhr, status, error) {
                console.log('AJAX Error: ' + status + ' - ' + error);
            }
        });
    });
});

</script>
</x-app-layout>

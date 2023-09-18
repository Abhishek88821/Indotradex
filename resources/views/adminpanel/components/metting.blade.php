<table id="file_export" class="table border table-striped table-bordered display text-nowrap">
    <tbody>
        @if ($enquiry->user->firstName)
        <tr>
            <td><strong>Product Name</strong></td>
            <td>{{ $enquiry->user->firstName . $enquiry->user->LastName }}</td>
        </tr>
        @endif

        @if ($enquiry->via)
        <tr>
            <td><strong>Via</strong></td>
            <td>{{ $enquiry->via }}</td>
        </tr>
        @endif

        @if ($enquiry->time)
        <tr>
            <td><strong>Time</strong></td>
            <td>
                {{ \Carbon\Carbon::parse($enquiry->time)->format('d-m-Y H:i:s') }}
            </td>
        </tr>
        @endif

        @if ($enquiry->perpose)
        <tr>
            <td><strong>Perpose</strong></td>
            <td>{{ $enquiry->perpose }}</td>
        </tr>
        @endif

        @if ($enquiry->message)
        <tr>
            <td><strong>Message</strong></td>
            <td>{{ $enquiry->message }}</td>
        </tr>
        @endif

        
        <tr>
            <td><strong>Link</strong></td>
            <td>
                <input type="hidden" value="{{$enquiry->id }}">
                <input type="link" class="form-control link-input" placeholder="Enter Meeting link Here ..." value="{{ $enquiry->link ?? '' }}">
                <button class="btn btn-primary update-link  m-2">Update Link</button>
                <div class="alert alert-danger mt-2 d-none" id="validation-errors"></div>
                <div class="alert alert-success mt-2 d-none" id="success-message"></div>
            </td>
        </tr>
        
        
     


      
    </tbody>
</table>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function () {
    $('.update-link').click(function () {
        var linkInput = $(this).closest('tr').find('.link-input');
        var newLink = linkInput.val();
        var enquiryId = $(this).closest('tr').find('input[type="hidden"]').val(); // Get the enquiry_id value
        $.ajax({
            url: '{{ route("admin.metting.link.update") }}',
            type: 'POST',
            data: { newLink: newLink, enquiry_id: enquiryId, _token: '{{ csrf_token() }}' },
            dataType: 'json',
            success: function (response) {
                console.log(response.errors);
                if (response.errors) {
                    
                    var validationErrors = Object.values(response.errors).join('<br>');
                    $('#validation-errors').html(validationErrors).removeClass('d-none');
                    $('#success-message').addClass('d-none');
                } else {
                    $('#validation-errors').addClass('d-none');
                    $('#success-message').html(response.message).removeClass('d-none');
                   
                }
            },
            error: function (xhr, status, error) {
                
                console.log('AJAX Error: ' + status + ' - ' + error);
            }
        });
    });
});


</script>

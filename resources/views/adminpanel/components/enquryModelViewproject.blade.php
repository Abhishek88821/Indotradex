<table id="file_export" class="table border table-striped table-bordered display text-nowrap">
    <tbody>
        @if ($enquiry->project->name)
        <tr>
            <td><strong>Product Name</strong></td>
            <td>{{ $enquiry->project->name }}</td>
        </tr>
        @endif

        @if ($enquiry->user->firstName)
        <tr>
            <td><strong>User Name</strong></td>
            <td>{{ $enquiry->user->firstName }}</td>
        </tr>
        @endif

        @if ($enquiry->type)
        <tr>
            <td><strong>Type</strong></td>
            <td>
                {{ $enquiry->type == 1 ? 'Invester' : ($enquiry->type == 2 ? 'projectowner' : "") }}
            </td>
        </tr>
        @endif

        @if ($enquiry->interest)
        <tr>
            <td><strong>Interest</strong></td>
            <td>{{ $enquiry->interest }}</td>
        </tr>
        @endif

        @if ($enquiry->requirement)
        <tr>
            <td><strong>Requirement</strong></td>
            <td>{{ $enquiry->requirement }}</td>
        </tr>
        @endif

        @if ($enquiry->p_business)
        <tr>
            <td><strong>Bussiness</strong></td>
            <td>{{ $enquiry->p_business }}</td>
        </tr>
        @endif

        @if ($enquiry->photo)
        <tr>
            <td><strong>Quality PDF</strong></td>
            <td>
                <a href="{{ asset($enquiry->photos->filepath) }}" target="_blank">
                    <img src="{{ asset($enquiry->photos->filepath) }}" alt="Quality PDF" style="height: 100px">
                </a>
                <a href="{{ asset($enquiry->photos->filepath) }}" download>
                    <i class="fa fa-download" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endif
        @if ($enquiry->remark)
        <tr>
            <td><strong>Remark</strong></td>
            <td>{{ $enquiry->remark }}</td>
        </tr>
        @endif
    </tbody>
</table>

<table id="file_export" class="table border table-striped table-bordered display text-nowrap">
    <tbody>
        @if ($enquiry->product->name)
        <tr>
            <td><strong>Product Name</strong></td>
            <td>{{ $enquiry->product->name }}</td>
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
                {{ $enquiry->type == 1 ? 'Supplier' : ($enquiry->type == 2 ? 'Buying' : ($enquiry->type == 3 ? 'Sourcing' : '')) }}
            </td>
        </tr>
        @endif

        @if ($enquiry->qty)
        <tr>
            <td><strong>Qty</strong></td>
            <td>{{ $enquiry->qty }}</td>
        </tr>
        @endif

        @if ($enquiry->quantity)
        <tr>
            <td><strong>Quantity</strong></td>
            <td>{{ $enquiry->quantity }}</td>
        </tr>
        @endif

        @if ($enquiry->rate)
        <tr>
            <td><strong>Rate</strong></td>
            <td>{{ $enquiry->rate }}</td>
        </tr>
        @endif

        @if ($enquiry->Payment)
        <tr>
            <td><strong>Payment</strong></td>
            <td>{{ $enquiry->Payment }}</td>
        </tr>
        @endif

        @if ($enquiry->delivery)
        <tr>
            <td><strong>Delivery</strong></td>
            <td>{{ $enquiry->delivery }}</td>
        </tr>
        @endif

        @if ($enquiry->quality_pdf)
        <tr>
            <td><strong>Quality PDF</strong></td>
            <td>
                <a href="{{ asset($enquiry->qualityPdf->filepath) }}" target="_blank">
                    <img src="{{ asset($enquiry->qualityPdf->filepath) }}" alt="Quality PDF" style="height: 100px">
                </a>
                <a href="{{ asset($enquiry->qualityPdf->filepath) }}" download>
                    <i class="fa fa-download" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endif

        @if ($enquiry->photograph)
        <tr>
            <td><strong>Photograph</strong></td>
            <td>
                <a href="{{ asset($enquiry->photographs->filepath) }}" target="_blank">
                    <img src="{{ asset($enquiry->photographs->filepath) }}" alt="Photograph" style="height: 100px">
                </a>
                <a href="{{ asset($enquiry->photographs->filepath) }}" download>
                    <i class="fa fa-download" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endif

        @if ($enquiry->otherItems)
        <tr>
            <td><strong>Other Items</strong></td>
            <td>{{ $enquiry->otherItems }}</td>
        </tr>
        @endif

        @if ($enquiry->forMaking)
        <tr>
            <td><strong>For Making</strong></td>
            <td>{{ $enquiry->forMaking }}</td>
        </tr>
        @endif

        @if ($enquiry->Pieces)
        <tr>
            <td><strong>Pieces</strong></td>
            <td>{{ $enquiry->Pieces }}</td>
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

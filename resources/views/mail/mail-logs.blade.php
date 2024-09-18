<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
            
        <h5 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Mails /</span> Mail Logs
        </h5>
            
        @if ($mailLogs->count() > 0)
        <div class="card p-3">
            <h5 class="card-header">Mail Logs</h5>
            <div class="card-datatable">
                <table class="dt-responsive table table-bordered">
                    <thead>
                        <tr>
                            <th>Recipient</th>
                            <th>Template</th>
                            <th>Coin</th>
                            <th>Quantity</th>
                            <th>Amount Charged</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mailLogs as $log)
                            <tr>
                                <td>{{ $log->recipient_email }}</td>
                                <td>{{ $log->template ? $log->template->name : 'N/A' }}</td>
                                <td>{{ $log->coin }}</td>
                                <td>{{ $log->quantity }}</td>
                                <td>{{ $log->amount_charged }}</td>
                                <td>{{ $log->created_at->format('M. j, Y g:i a') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
            <!-- Pagination links -->
            <div class="d-flex justify-content-center">
                {{ $mailLogs->links() }}
            </div>
        @else
            <p>No mail logs found.</p>
        @endif
    </div>

</x-app-layout>

@push('scripts')
<script>
    $(document).ready(function () {
        $('#view-template').on('click', function (e) {
            e.preventDefault();
            
            // Get the selected template ID
            var templateId = $('#template').val();

            // Make an AJAX request to get the template body
            $.ajax({
                url: '/email-template/' + templateId,
                method: 'GET',
                success: function (response) {
                    // Insert the template body into the modal
                    $('#template-body-content').html(response.body);
                },
                error: function () {
                    alert('Unable to load template. Please try again.');
                }
            });
        });
    });
</script>
@endpush

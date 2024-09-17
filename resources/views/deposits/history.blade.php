<x-app-layout>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
            
        <div class="container mt-5">
            <h2 class="mb-4">Deposit History</h2>
    
            @if($deposits->isEmpty())
                <p>No deposit history found.</p>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Reference Number</th>
                            <th>Amount</th>
                            <th>Payment Gateway</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($deposits as $deposit)
                            <tr>
                                <td>{{ $deposit->ref_no }}</td>
                                <td>{{ $deposit->amount }}</td>
                                <td>{{ $deposit->paymentGateway->name }}</td>
                                <td>{{ ucfirst($deposit->status) }}</td>
                                <td>{{ $deposit->created_at->format('d M, Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>
      <!-- / Content -->
</x-app-layout>

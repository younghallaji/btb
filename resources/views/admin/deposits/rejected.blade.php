@extends('layouts.admin')

@section('title', 'Email Templates')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
            
        <div class="container mt-5">
            <h2 class="mb-4">Rejected Deposit History</h2>
    
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
                            <th> Action </th>
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
                                <td>
                                    <form action="{{ route('admin.deposits.approve', $deposit->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-success" type="submit">Approve</button>
                                    </form>
                                
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>
      <!-- / Content -->
@endsection

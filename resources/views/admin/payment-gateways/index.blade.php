@extends('layouts.admin')

@section('title', 'Payment Gateways')

@section('content')
<h1>Manage Payment Gateways</h1>

<a href="{{ route('admin.payment-gateways.create') }}">Create New Gateway</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Wallet Address</th>
            <th>Logo</th>
            <th>QR Code</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gateways as $gateway)
            <tr>
                <td>{{ $gateway->name }}</td>
                <td>{{ $gateway->wallet_address }}</td>
                <td>
                    @if ($gateway->logo)
                        <img src="{{ asset('storage/' . $gateway->logo) }}" alt="Logo" width="50">
                    @endif
                </td>
                <td>
                    @if ($gateway->qrcode)
                        <img src="{{ asset('storage/' . $gateway->qrcode) }}" alt="QR Code" width="50">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.payment-gateways.edit', $gateway->id) }}">Edit</a>
                    <form action="{{ route('admin.payment-gateways.destroy', $gateway->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

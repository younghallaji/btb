@extends('layouts.admin')

@section('title', 'Create Email Template')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        
        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Gateway/</span> Payment Gateway</h4>

    @if($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.payment-gateways.store') }}" method="POST" class="row" enctype="multipart/form-data">
        @csrf
        <div class="col-md-7 mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="col-md-7 mb-3">
            <label for="wallet_address">Wallet Address</label>
            <input type="text" id="wallet_address" name="wallet_address" class="form-control" value="{{ old('wallet_address') }}" required>
        </div>

        <div class="col-md-7 mb-3">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="col-md-7 mb-3">
            <label for="logo">Logo</label>
            <input type="file" id="logo" name="logo" class="form-control" accept="image/*">
        </div> 

        <div class="col-md-7 mb-3">
            <label for="qrcode">QR Code</label>
            <input type="file" id="qrcode" name="qrcode" class="form-control" accept="image/*">
        </div>

        <div class="col-md-7 mb-3">
            <button type="submit" class="btn btn-primary">Create Payment Gateway</button>
        </div>
    </form>
    </div>
@endsection

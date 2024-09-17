<x-app-layout>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Dashboard/</span> By BTB</h4>
        <div class="row">
            <form action="{{ route('deposits.store') }}" method="POST" class="row">
                @csrf
                <div class="col-md-7 mb-3">
                    <label for="amount">Amount</label>
                    <input type="number" id="amount" name="amount" min="1" class="form-control" required>
                </div>
        
                <div class="col-md-7 mb-3">
                    <label for="payment_gateway_id">Payment Gateway</label>
                    <select name="payment_gateway_id" id="payment_gateway_id" class="form-control" required>
                        <option value="" selected disabled>Select Payment Gateway</option>
                        @foreach($paymentGateways as $gateway)
                            <option value="{{ $gateway->id }}" data-wallet="{{ $gateway->wallet_address }}" data-qrcode="{{ asset('storage/'.$gateway->qrcode) }}">
                                {{ $gateway->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Wallet Address Display with Copy Button -->
                <div class="col-md-7 mb-3">
                    <label for="wallet_address">Wallet Address</label>
                    <div class="input-group">
                        <input type="text" id="wallet_address" class="form-control" readonly>
                        <button class="btn btn-outline-secondary" type="button" id="copy-button">
                            <i class="fa fa-copy"></i> Copy
                        </button>
                    </div>
                </div>
                
                <!-- QR Code Display -->
                <div class="col-md-7 mb-3">
                    <label for="qrcode">QR Code</label>
                    <div id="qrcode-container">
                        <img id="qrcode" src="" alt="QR Code" style="width: 150px; height: 150px; display: none;">
                    </div>
                </div>
                
                
                
                <div class="col-md-7 mb-3">
                    <button type="submit" class="btn btn-primary">Deposit</button>
                </div>
            </form>
        </div>
    </div>
      <!-- / Content -->
</x-app-layout>
<script>
    $(document).ready(function () {
        // Handle Payment Gateway change
        $('#payment_gateway_id').on('change', function () {
            var selectedOption = $(this).find('option:selected');
            var walletAddress = selectedOption.data('wallet');
            var qrCodePath = selectedOption.data('qrcode');

            // Update the wallet address
            $('#wallet_address').val(walletAddress);

            // Update the QR code
            if (qrCodePath) {
                $('#qrcode').attr('src', qrCodePath).show();
            } else {
                $('#qrcode').hide();
            }
        });

        // Copy wallet address to clipboard
        $('#copy-button').on('click', function () {
            var walletAddress = $('#wallet_address').val();
            if (walletAddress) {
                navigator.clipboard.writeText(walletAddress).then(function () {
                    alert('Wallet address copied to clipboard!');
                }, function () {
                    alert('Failed to copy wallet address.');
                });
            }
        });
    });
</script>

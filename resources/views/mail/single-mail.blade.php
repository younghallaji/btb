<x-app-layout>

    <div class="container mt-5">
        <h1>Send Email</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('mail.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="recipient_email">Recipient Email <i class="bx bx-info-circle"></i></label>
                <input type="email" class="form-control" id="recipient_email" name="recipient_email" placeholder="Email to receive link" required>
            </div>

            <div class="form-group">
                <label for="template">Select Template</label>
                <select class="form-control" id="template" name="template_id" required>
                    @foreach($templates as $template)
                        <option value="{{ $template->id }}">{{ $template->name }}</option>
                    @endforeach
                </select>
                <a href="#" id="view-template" data-toggle="modal" data-target="#templateModal">View Template</a>
            </div>

            <div class="form-group">
                <label for="coin">Select Coin</label>
                <select class="form-control" id="coin" name="coin" required>
                    <option value="Bitcoin">Bitcoin</option>
                    <option value="Ethereum">Ethereum</option>
                    <!-- Add more coin options as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity <i class="bx bx-info-circle"></i></label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
            </div>

            <div class="form-group">
                <label for="min_balance">Min Balance <i class="bx bx-info-circle"></i></label>
                <input type="number" class="form-control" id="min_balance" name="min_balance" min="0" required>
            </div>

            <button type="submit" class="btn btn-success">Send Mail</button>
        </form>
    </div>

    <!-- Modal to view template content -->
    <div class="modal fade" id="templateModal" tabindex="-1" role="dialog" aria-labelledby="templateModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="templateModalLabel">Template Preview</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="template-body-content">
              <!-- Template content will be loaded here -->
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
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

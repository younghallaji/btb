@extends('layouts.admin')

@section('title', 'Email Templates')

@section('content')
    <h1>Email Templates</h1>

    <a href="{{ route('admin.email-templates.create') }}">Create New Template</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Template Name</th>
                <th>Email Subject</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($templates as $template)
                <tr>
                    <td>{{ $template->name }}</td>
                    <td>{{ $template->subject }}</td>
                    <td>
                        <a href="{{ route('admin.email-templates.edit', $template->id) }}">Edit</a>
                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#descriptionModal" 
                            data-description="{{ $template->body }}" data-name="{{ $template->name }}">
                            View
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal for viewing the description -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameWithTitle" class="form-label">Name</label>
                  <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name">
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailWithTitle" class="form-label">Email</label>
                  <input type="email" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx">
                </div>
                <div class="col mb-0">
                  <label for="dobWithTitle" class="form-label">DOB</label>
                  <input type="date" id="dobWithTitle" class="form-control">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    <div class="modal fade" id="descriptionModal" tabindex="-1" aria-labelledby="descriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="descriptionModalLabel">Template Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 id="templateName"></h5>
                    <p id="templateDescription"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('#descriptionModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var description = button.data('description'); // Extract description from data-* attributes
            var name = button.data('name'); // Extract name from data-* attributes

            // Update the modal's content.
            var modal = $(this);
            modal.find('#templateName').text(name);
            modal.find('#templateDescription').html(description);
        });
    </script>
@endpush
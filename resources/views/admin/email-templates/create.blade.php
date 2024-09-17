@extends('layouts.admin')

@section('title', 'Create Email Template')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        
        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Template/</span> Create Template</h4>

    @if($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.email-templates.store') }}" method="POST" class="row">
        @csrf

        <div class="col-md-7 mb-3">
            <label for="name">Template Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="col-md-7 mb-3">
            <label for="subject">Email Subject</label>
            <input type="text" id="subject" name="subject" class="form-control" value="{{ old('subject') }}" required>
        </div>

        <div class="col-md-7 mb-3">
            <label for="body">Email Body</label>
            <div id="full-editor">
                      
            </div>
            <textarea id="body" name="body" rows="10" class="form-control" required>{{ old('body') }}</textarea>
        </div>

        <div class="col-md-7 mb-2 flex-end">
            <button type="submit" class="btn btn-primary">Create Template</button>
        </div>
    </form>
    </div>

    
@endsection
@push('scripts')
<script>
    var quill = new Quill("#full-editor",{bounds:"#full-editor",placeholder:"Type Something...",modules:{formula:!0,toolbar:[[{font:[]},{size:[]}],["bold","italic","underline","strike"],[{color:[]},{background:[]}],[{script:"super"},{script:"sub"}],[{header:"1"},{header:"2"},"blockquote","code-block"],[{list:"ordered"},{list:"bullet"},{indent:"-1"},{indent:"+1"}],[{direction:"rtl"}],["link","image","video","formula"],["clean"]]},theme:"snow"});
    function updateTextarea() {
        var editorContent = quill.root.innerHTML;
        document.getElementById('body').value = editorContent;
    }

    // Event listener for changes in the editor (keyup and change)
    quill.on('text-change', function() {
        updateTextarea();
    });
</script>
@endpush
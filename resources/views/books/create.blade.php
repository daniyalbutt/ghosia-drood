@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Books</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Add Book</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <p class="mb-1"><strong>Whoops!</strong> There were some problems with your input.</p>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="mb-0">{{ $message }}</p>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-1">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="formrow-image-input" class="form-label">Image <strong>*</strong></label>
                                <input name="image" type="file" class="form-control" id="formrow-image-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-name-input" class="form-label">Name <strong>*</strong></label>
                                <input name="name" type="text" class="form-control" id="formrow-name-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-author-input" class="form-label">Author <strong>*</strong></label>
                                <input name="author" type="text" class="form-control" id="formrow-author-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-language-input" class="form-label">Language <strong>*</strong></label>
                                <input name="language" type="text" class="form-control" id="formrow-author-input" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="formrow-file-input" class="form-label">File <strong>*</strong></label>
                                <input name="file" type="file" class="form-control" id="formrow-file-input" required>
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary w-md btn-loader">
                            <img src="{{ asset('images/loader.gif') }}" alt="">
                            Add Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
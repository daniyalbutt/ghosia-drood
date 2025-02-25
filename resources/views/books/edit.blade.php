@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Book - {{ $data->name }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Edit Book</li>
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
                <form method="post" action="{{ route('books.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-1">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="d-flex">
                                    <div>
                                        <img src="{{ asset($data->image) }}" alt="" width="70">
                                    </div>
                                    <div class="w-100 ms-2">
                                        <label for="formrow-image-input" class="form-label">Image</label>
                                        <input name="image" type="file" class="form-control" id="formrow-image-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-name-input" class="form-label">Name <strong>*</strong></label>
                                <input name="name" type="text" class="form-control" id="formrow-name-input" value="{{ old('name', $data->name) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-author-input" class="form-label">Author <strong>*</strong></label>
                                <input name="author" type="text" class="form-control" id="formrow-author-input" value="{{ old('author', $data->author) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-language-input" class="form-label">Language <strong>*</strong></label>
                                <input name="language" type="text" class="form-control" id="formrow-author-input" value="{{ old('language', $data->language) }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="formrow-file-input" class="form-label">File</label>
                                <input name="file" type="file" class="form-control" id="formrow-file-input">
                                <a href="{{ asset($data->link) }}" class="mt-2 d-block" download>Download File</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary w-md btn-loader">
                            <img src="{{ asset('images/loader.gif') }}" alt="">
                            Update Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection